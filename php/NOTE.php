<?php
$upnotes=$_SESSION['user']['notes'];

function add_note()
{
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['cr']!=null && $_POST['cr']!='f')
	{
		$note= array(
				'title'=>$_POST['title'],
				'main'=>$_POST['main']
			);
		$upnotes=$_SESSION['user']['notes'];
		array_push($upnotes, $note);
		$con = include "Client.php";
		$collection=$con->notes->users;
		$collection->update($_SESSION['user'],array('$set'=>array('notes'=>$upnotes)),array('upsert'=>true));
		$_SESSION['user']['notes']=$upnotes;
		$con->close();
	}
}

function edit_note()
{
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['cr']!=null && $_POST['cr']!='f' && $_POST['cr']=='t')
	{
		$note= array(
				'title'=>$_POST['title'],
				'main'=>$_POST['main']
			);
		$upnotes=$_SESSION['user']['notes'];
		$upnotes[$_SESSION['open']]=$note;
		$con = include "Client.php";
		$collection=$con->notes->users;
		$collection->update($_SESSION['user'],array('$set'=>array('notes'=>$upnotes)),array('upsert'=>true));
		$_SESSION['user']['notes']=$upnotes;
		$con->close();
		echo '<script>window.location.href="Index.php";</script>';
	}
}

function delete_note()
{
	if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['dt']!=null && $_POST['dt']!='f' && $_POST['dt']=='t')
	{
		$upnotes=$_SESSION['user']['notes'];
		$upnotes[$_SESSION['open']]=null;
		$con = include "Client.php";
		$collection=$con->notes->users;
		$collection->update($_SESSION['user'],array('$set'=>array('notes'=>$upnotes)),array('upsert'=>true));
		$_SESSION['user']['notes']=$upnotes;
		$con->close();
		echo '<script>window.location.href="Index.php";</script>';
	}
}
?>
<?php
function check($user)
{
	$con= include 'Client.php';
	$collection=$con->notes->users;
	$list = $collection->find();
	while ($document=$list->getNext())
	{	
		if ($document["nick"]==$user["nick"] && $document["password"]==$user["password"]) {$con->close(); return $document;}
	}
	$con->close();
	return null;
}

function sing_in()
{
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$nick = $_POST['nick'];
		$password = crypt($_POST['password'], "$2a$07$Calabangaqwertycrypt$");
		$log_in = array
		(
			"nick" => $nick,
			"password" => $password
		);
		$person = check($log_in);
		if ($person!=null) {$_SESSION['user']=$person; echo "<script>reload();</script>";}
	}
}

function alert($str)
{
echo '<div class="alert alert-danger" id=>
<a class="close" data-dismiss="alert" href="#">×</a>';
echo $str;
echo '</div>';
}
?>
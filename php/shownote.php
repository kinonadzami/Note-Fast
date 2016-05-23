<?php
end($_SESSION['user']['notes']);
$end=key($_SESSION['user']['notes']);
reset($_SESSION['user']['notes']);
$key=key($_SESSION['user']['notes']);


		if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['index']!=null && $_POST['index']!="") 
	{
		$_SESSION['open']=$_POST['index'];
		echo '<script>	gt("Open.php");	</script>';
	}


while ($key!=$end)
{
	if ($_SESSION['user']['notes'][$key]!=null)
	{
	echo "<div class='item'>";
		echo '<div class="thumbnail">';
			echo '<div class="caption">';
				echo '<h3>';
				echo $_SESSION['user']['notes'][$key]['title'];
				echo '</h3>';
				echo '<p>';
				echo $_SESSION['user']['notes'][$key]['main'];
				echo '</p>';
				echo '<form action="" method="post" id="';
				echo $key;
				echo '">';
				echo '<input name="index" type="text" style="visibility:hidden; font-size:1px;" value=';
				echo $key;
				echo '></input>';
				echo '<div class="row"><div class="col-xs-7"></div><div class="col-xs-5"><button type="submit" form="';
				echo $key;
				echo '" class="btn btn-success">Подробнее <i class="fa fa-arrow-right"></i></div></div>';
				echo '</form>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	echo '<?php open_note();?>';
	}
	next($_SESSION['user']['notes']);
	$key=key($_SESSION['user']['notes']);
}
	if ($_SESSION['user']['notes'][$key]!=null)
	{
	echo "<div class='item'>";
		echo '<div class="thumbnail">';
			echo '<div class="caption">';
				echo '<h3>';
				echo $_SESSION['user']['notes'][$key]['title'];
				echo '</h3>';
				echo '<p>';
				echo $_SESSION['user']['notes'][$key]['main'];
				echo '</p>';
				echo '<form action="" method="post" id="';
				echo $key;
				echo '">';
				echo '<input name="index" type="text" style="visibility:hidden; font-size:1px;" value=';
				echo $key;
				echo '></input>';
				echo '<div class="row"><div class="col-xs-7"></div><div class="col-xs-5"><button type="submit" form="';
				echo $key;
				echo '" class="btn btn-success">Подробнее <i class="fa fa-arrow-right"></i></div></div>';
				echo '</form>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
	echo '<?php open_note();?>';
	}



?>
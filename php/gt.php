<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['index']!=null && $_POST['index']!="") 
	{
		$_SESSION['open']=$_POST['index'];
	}
?>
	
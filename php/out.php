<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['title']==null)
{
	$_SESSION['user']=null;
	echo "<script>reload();</script>";
}
?>
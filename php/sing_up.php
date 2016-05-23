<?php
function check($user)
{
	$con= include 'Client.php';
	$collection=$con->notes->users;
	$list = $collection->find();
	while ($document=$list->getNext())
	{	
		if ($document["nick"]==$user["nick"] || $document["email"]==$user["email"]) { alert('Такой пользаватель уже существует!'); $con->close(); return false;}
	}
	$con->close();
	return true;
}

function sing_up()
{
	if($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		$con= include 'Client.php';
		$collection=$con->notes->users;
		$nick = $_POST['nick'];
		$password = crypt($_POST['password'], "$2a$07$Calabangaqwertycrypt$");
		$confirm_password = crypt($_POST['confirm_password'], "$2a$07$Calabangaqwertycrypt$");
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$user = array
		(
			"nick" => $nick,
			"password" => $password,
			"email" => $email,
			"name" => $name,
			"surname" => $surname,
			"notes" => array()
		);
        $_POST['nick']="";
        $_POST['password']="";
        $_POST['confirm_password']="";
        $_POST['name']="";
        $_POST['surname']="";
        $_POST['email']="";
		if ($user["password"]!=$confirm_password) { alert('Пароли не совпадают.');}
		else {if (check($user)==true) $collection->insert($user); }
		$con->close();
		$_SESSION['user']=$user;
		echo "<script>reload();</script>";
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
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Регистрация</title>
	<link rel="stylesheet" href="css\Reg.css">
    <script>
    function gt(str)
    {
        window.location.href = str;
    }

    function reload()
    {
        window.location.href = 'Index.php';
    }
    </script>
</head>

<body>

<div class="navbar navbar-default">
        <div class="container">
        
            <div class="navbar-header">
                <a class="navbar-brand" href="Index.php">    Note-Fast    </a>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:30px">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3 class="panel-title"><strong>Регистрация </strong></h3>
                </div>
  
                <div class="panel-body">
                    <form role="form" method="post">
                        <?php
                        include 'php\sing_up.php';
                        sing_up();
                        ?>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="first_name" class="form-control" placeholder="Имя" tabindex="1" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
					           <div class="form-group">
						          <input type="text" name="surname" id="last_name" class="form-control " placeholder="Фамилия" tabindex="2" required>
					           </div>
				            </div>
			             </div>
			             <div class="form-group">
                             <input type="text" name="nick" id="display_name" class="form-control " placeholder="Ник" tabindex="3" required>
			             </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control " placeholder="Электронная почта" tabindex="4" required>
			             </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control " placeholder="Пароль" tabindex="5" required>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="confirm_password" id="password_confirmation" class="form-control " placeholder="Повторите пароль" tabindex="6" required>
                                </div>
                            </div>
			             </div>
                        <button type="submit" class="btn btn-success">Зарегистрироватся</button>
                        <hr>
                        <div class="form-group">
                            <div style="font-size:85%">Если уже есть акаунт
                                <a href="Log_in.php">
                                    Вход
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.js"></script>
</body>
</html>
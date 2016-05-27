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
    <title>Вход</title>

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
    <title>Вход</title>
	<link rel="stylesheet" href="css\Log_in.css">
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
                <div class="panel-heading"><h3 class="panel-title"><strong>Вход </strong></h3>
                </div>
  
                <div class="panel-body">
                    <form role="form" method="post">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input name="nick" id="nick" type="text" placeholder="Логин" autofocus required class="form-control" tabindex="1">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                               <div class="form-group">
                                  <input name="password" id="password" type="password" placeholder="Пароль" required class="form-control" tabindex="2">
                               </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">Вход</button>
                        <hr>
                        <div class="form-group">
                            <div style="font-size:85%">Если еще нет акаунта, то зарегестритуйтесь
                                <a href="Reg.php">
                                     Регестрация
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
include 'php\sing_in.php';
sing_in();
?>
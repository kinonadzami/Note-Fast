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
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Note-Fast</title>
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

    function gc()
    {
        document.getElementById('cr').value='t';
    }
    </script>
</head>

<body>

    <div class="navbar navbar-default">
        <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
            <span class="sr-only">Открыть навигацию</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
            <div class="navbar-header">
                <a class="navbar-brand" href="Index.php">    Note-Fast    </a>
            </div>
            <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-nav">
                        <li><a href="Index.php">Все заметки</a></li>
                        <li><a href="Creat.php">Создать заметку</a></li>
                    </ul>
                    <?php
                    if ($_SESSION["user"]!=null)
                    {
                        include "php\avin.php";
                    }
                    else 
                    {
                        echo "<script>gt('Log_in.php');</script>";  
                    }
                    ?>
                    
            </div>
            <?php
                include 'php\sing_in.php';
                sing_in();
            ?>
        </div>
    </div>

    <div class="container">
        <div class="panel-body">
                    <form role="form" method="post" id="note">
                        <div class="row">
                        <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
                        <div class="col-xs-12 col-sm-10 col-md-8 col-lg-6">
                            <div class="form-group">
                                <input type="text" name="title" id="title" class="form-control" placeholder="Заголовок" tabindex="1" required>
                            </div>
                            <div class="form-group">
                                <textarea rows=20 type="text" name="main" id="main" class="form-control" tabindex="2" required></textarea>
                            </div>
                        <button onclick="gc()" type="submit" form="note" class="btn btn-success">Создать</button><input type="text" name="cr" id="cr" style="visibility:hidden;" value="f"></input>
                        </div>
                        <div class="col-xs-0 col-sm-1 col-md-2 col-lg-3"></div>
                        </div>
                    </form>
                </div>
                <?php
                include "php\NOTE.php";
                add_note();
                ?>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.js"></script>
</body>
</html>
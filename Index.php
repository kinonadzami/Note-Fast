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
                        include "php\avlog.php";  
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
    <div class="row masonry" data-columns>
        <?php
        if ($_SESSION["user"]!=null)
            {
               include 'php\shownote.php';
            }
        ?>
    </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/salvattore.js"></script>
</body>
</html>
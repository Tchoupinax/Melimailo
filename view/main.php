<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Bare - Start Bootstrap Template</title>
    <!-- 
    @@@ CSS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <link rel="stylesheet" type="text/css" href="ressources/css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="ressources/css/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="ressources/css/common.css">
    <?php
    // ON INCLUT LA FEUILLE CSS SPECIFIQUE A LA PAGE
    if (!empty($_GET['page']) && is_file('ressources/css/'.$_GET['page'].'.css')) {
        echo "<link rel='stylesheet' type='text/css' href='ressources/css/".$_GET['page'].".css'>";
        echo "\n";
    }
    ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-deux">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">MeliMailo</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>A Bootstrap Starter Template</h1>
                <p class="lead">Complete with pre-defined file paths that you won't have to change!!</p>
                <ul class="list-unstyled">
                    <li>Bootstrap v3.3.7</li>
                    <li>jQuery v1.11.1</li>
                </ul>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- 
    @@@ JS @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
    -->
    <script type="text/javascript" src="ressources/js/jquery.js"></script>
    <script type="text/javascript" src="ressources/js/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="ressources/js/common.js"></script>
    <?php
    // ON INCLUT LA FEUILLE JS SPECIFIQUE A LA PAGE
    if (!empty($_GET['page']) && is_file('ressources/js/'.$_GET['page'].'.js')) {
        echo "<script type='text/javascript' src='ressources/js/".$_GET['page'].".js'></script>";
        echo "\n";
    }
    ?>
</body>
</html>

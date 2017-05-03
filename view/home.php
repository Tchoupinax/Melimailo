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
    <link rel="stylesheet" type="text/css" href="ressources/css/bootstrap/css/bootstrap.min.css">
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
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="ressources/images/mail_logo.png" class="img-responsive" alt="Responsive image"> <br>
                <font color="white">Bienvenue sur <b>MeliMailo</b> 
                <br>
                <hr>
                Votre première application mail décentralisé inter-connecté.</font>
            </div>
            <div class="col-md-9">
                <div class="well">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Adresse : </label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Mot de passe : </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Mot de passe">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                          <a class="btn btn-success btn-sm btn-block" href="index.php?page=connexion" role="button">Connexion</a>
                          <a class="btn btn-success btn-sm btn-block" href="index.php?page=inscription" role="button">Inscription</a>
                        </div>
                      </div>
                    </form>
                    <br>
                    <br>
                </div>
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

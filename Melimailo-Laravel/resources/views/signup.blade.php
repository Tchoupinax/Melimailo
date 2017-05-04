<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inscription</title>
    {{ HTML::style('css/bootstrap/css/bootstrap.min.css') }}
    {{ HTML::style('css/fontawesome/css/font-awesome.min.css') }}
    {{ HTML::style('css/home.css') }}
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                {{ HTML::image('image/mail_logo.png', 'Responsive image', array('class' => 'img-responsive')) }}
                <font color="white">Bienvenue sur <b>MeliMailo</b>
                <br>
                <hr>
                Votre première application mail décentralisé inter-connecté.</font>
            </div>
            <div class="col-md-9">
                <div class="well">
                    <form class="form-horizontal" action="index.php?page=inscription" method="post">
                      <div class="form-group">
                        <label for="pseudo" class="col-sm-3 control-label">Pseudo : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="pseudo" id="pseudo" placeholder="Pseudonyme">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password1" class="col-sm-3 control-label">Mot de passe : </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password1" id="password1" placeholder="Mot de passe">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password2" class="col-sm-3 control-label">Retapez : </label>
                        <div class="col-sm-9">
                          <input type="password" class="form-control" name="password2" id="password2" placeholder="Mot de passe">
                        </div>
                      </div>
                      <div class="form-group">
                            <button type="submit" class="btn btn-success btn-sm btn-block">Inscription</button>
                        </div>
                      </div>
                    </form>
                </div>
               <a href="https://github.com/Tchoupinax/Melimelo" target="_blank">{{ HTML::image('image/github.png', 'Responsive image', array('class' => 'img-responsive', 'width' => '30', 'heigth' => '30')) }}</a>
           </div>  
        </div>
    </div>
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap/bootstrap.min.js') }}
</body>
</html>
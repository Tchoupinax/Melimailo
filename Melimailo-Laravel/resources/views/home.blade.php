<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home</title>
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
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Pseudo : </label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="inputEmail3" placeholder="Pseudo">
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
                            {{ HTML::link('#', 'Sign In', array('class' => 'btn btn-success btn-sm btn-block')) }}
                            {{ HTML::link(URL::route('form.signup'), 'Sign Up', array('class' => 'btn btn-success btn-sm btn-block')) }}
                        </div>
                      </div>
                    </form>
                    <br>
                    <br>
                </div>
                <a href="https://github.com/Tchoupinax/Melimelo" target="_blank">{{ HTML::image('image/github.png', 'Responsive image', array('class' => 'img-responsive', 'width' => '30', 'heigth' => '30')) }}</a>
            </div>  
        </div>
    </div>
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap/bootstrap.min.js') }}
</body>
</html>
<?php
    // Démarrage de la session
    session_start();
    // Connexion à la base de données
    try {
        //$bdd = new PDO('mysql:host=localhost;dbname=', '', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
    }
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }
    // On inclut le contrôleur s'il existe et s'il est spécifié
    if (!empty($_GET['page']) && is_file('controler/'.$_GET['page'].'.php'))
    {
        include('controler/'.$_GET['page'].'.php');
    }
    // Sinon on affiche l'accueil
    else
    {
        header('Location:index.php?page=home');
    }
?>
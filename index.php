<?php
    // Démarrage de la session
    session_start();

    // Connexion à la bdd
    include('model/connexion.php');

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
<?php
    include('model/inscription.php');
    // Condition si on est du coté inscription ou affichage
    if (isset($_POST["pseudo"]) && isset($_POST["pseudo"]) && isset($_POST["pseudo"])) {
        // Les valeurs existent
        if (!empty($_POST["pseudo"]) && !empty($_POST["pseudo"]) && !empty($_POST["pseudo"]))
        {   
            // Les valeurs ne sont pas nulles
            include('view/home?success=true');
        }
        else
        {
            // Affichage de la vue avec eerreur
            include('inscription.php');
        }
    } else {
        // Affichage de la vue
        include('view/inscription.php');
    }
?>
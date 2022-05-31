
<?php

require('../PHP/config/config.php');

// récupérer le nom de l'activité et supprimer les antislashes ajoutés par le formulaire
$activity = stripslashes($_REQUEST['activity']);
$activity = mysqli_real_escape_string($conn, $activity);

if (isset($_REQUEST['activity'])) {
    //requéte pour ajouter a la BDD
    $requette = "SELECT * FROM `mylist` WHERE tache = '$activity' ";

    // execution de la requete sur la BDD
    $res_rechercher = mysqli_query($conn, $requette);

    if ($res_rechercher) {
        echo "votre tache a été trouvée";
    }

    header('Location: ../PHP/client/after_log.php');
    exit();
}

<?php

require('../PHP/config/config.php');

// récupérer le nom de l'activité et supprimer les antislashes ajoutés par le formulaire
$activity = stripslashes($_REQUEST['activity']);
$activity = mysqli_real_escape_string($conn, $activity);

if (isset($_REQUEST['activity'])) {
    //requéte pour ajouter a la BDD
    $requette = "DELETE FROM `mylist` WHERE id = '$activity'";

    // execution de la requete sur la BDD
    $res_supprimer = mysqli_query($conn, $requette);

    if (!$res_supprimer) {
        echo 'error !';
    }

    header('Location: ../PHP/client/after_log.php');
    exit();
}

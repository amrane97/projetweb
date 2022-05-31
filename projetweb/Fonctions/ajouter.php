<?php

require('../PHP/config/config.php');


// récupérer le nom de l'activité et supprimer les antislashes ajoutés par le formulaire
$activity = stripslashes($_REQUEST['activity']);
$activity = mysqli_real_escape_string($conn, $activity);

$date = stripslashes($_REQUEST['date']);
$date = mysqli_real_escape_string($conn, $date);

$heure = stripslashes($_REQUEST['heure']);
$heure = mysqli_real_escape_string($conn, $heure);

$personne_chargee = stripslashes($_REQUEST['personne_chargee']);
$personne_chargee = mysqli_real_escape_string($conn, $personne_chargee);

$etat = stripslashes($_REQUEST['etat']);
$etat = mysqli_real_escape_string($conn, $etat);

if (isset(
    $_REQUEST['activity'],
    $_REQUEST['date'],
    $_REQUEST['heure'],
    $_REQUEST['personne_chargee'],
    $_REQUEST['etat']
)) {
    //requéte pour ajouter a la BDD
    $requette = "INSERT INTO `mylist` (`tache`, `date`, `heure`, `personne_chargee`, `etat`)
     VALUES ('$activity', '$date', '$heure', '$personne_chargee', '$etat')";

    // execution de la requete sur la BDD
    $res_ajouter = mysqli_query($conn, $requette);

    if (!$res_ajouter) {
        echo 'Error !';
    }

    header('Location: ../PHP/client/after_log.php');
    exit();
}

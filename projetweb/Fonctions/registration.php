<?php

require('../PHP/config/config.php');

// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
$username = stripslashes($_REQUEST['username']);
$username = mysqli_real_escape_string($conn, $username);

// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
$password = stripslashes($_REQUEST['password']);
$password = mysqli_real_escape_string($conn, $password);



$nom = stripslashes($_REQUEST['nom']);
$nom = mysqli_real_escape_string($conn, $nom);

$prenom = stripslashes($_REQUEST['prenom']);
$prenom = mysqli_real_escape_string($conn, $prenom);

$email = stripslashes($_REQUEST['email']);
$email = mysqli_real_escape_string($conn, $email);

$tel = stripslashes($_REQUEST['tel']);
$tel = mysqli_real_escape_string($conn, $tel);

$adresse = stripslashes($_REQUEST['adresse']);
$adresse = mysqli_real_escape_string($conn, $adresse);

$sexe = stripslashes($_REQUEST['sexe']);
$sexe = mysqli_real_escape_string($conn, $sexe);

$nationalite = stripslashes($_REQUEST['nationalite']);
$nationalite = mysqli_real_escape_string($conn, $nationalite);

$centre = stripslashes($_REQUEST['centres']);
$centre = mysqli_real_escape_string($conn, $centre);

$vip = stripslashes($_REQUEST['vip']);
$vip = mysqli_real_escape_string($conn, $vip);


if (isset(
    $_REQUEST['username'],
    $_REQUEST['password'],
    $_REQUEST['nom'],
    $_REQUEST['prenom'],
    $_REQUEST['email'],
    $_REQUEST['tel'],
    $_REQUEST['adresse'],
    $_REQUEST['sexe'],
    $_REQUEST['nationalite'],
    $_REQUEST['centres'],
    $_REQUEST['vip']
)) {

    //requéte SQL Login + password
    $query = "INSERT into `client` (`Login`, `Pwd` ) VALUES ('$username', '$password')";

    $query2 = "INSERT into `info_client` (`Nom`, `Prenom`, `Email`, `Portable`, `Adresse`, `Sexe`, `Nationalite`, `Centre`, `VIP`) 
    VALUES ('$nom', '$prenom', '$email', '$tel', '$adresse', '$sexe', '$nationalite', '$centre', '$vip')";

    // execution de la requete sur la BDD
    $res = mysqli_query($conn, $query);
    $res_info = mysqli_query($conn, $query2);

    if (!$res or !$res_info) {
        echo 'impossible de creer le compte';
    }
    header('Location: ../PHP/client/login_client.php');
    exit();
}

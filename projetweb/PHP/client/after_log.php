<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if (!isset($_SESSION["username"])) {
    header("Location: login_client.php");
    exit();
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>
        mon compte
    </title>
    <link rel="stylesheet" href="/CSS/after_log.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script>

    </script>
</head>

<body>
    <center>
        <h1> <strong> BIENVENUE IN ToDoList </strong> </h1>
    </center>
    <br>
    <center>
        <img src="/Images/in_log.png" alt="liste png" width="200" height="200">
    </center>
    <br>
    <div>
        <h2 id="mesActivite"> <strong> MES ACTIVITES </strong></h2>
        <br>

        <div class="taches">

            <?php
            require('../config/config.php');

            $sql = "SELECT * FROM `mylist`";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // Afficher les résultats de chaque ligne
                while ($row = $result->fetch_assoc()) {
                    echo "<center>  <p style='font-family: 'Dancing Script', cursive; color: purple;font-size: larger;font-weight: bold;background-color: lightblue;'> <strong>id: </strong>" . $row["id"] . "<strong>   - Tache: </strong>" . $row["tache"]
                        . "<strong>   - Date: </strong>" . $row["date"] . "<strong>   - Heure: </strong>" . $row["heure"] . "<strong>  -  Personne chargée : </strong>" . $row["personne_chargee"] . "<strong> - Etat: </strong>" . $row["etat"] . "<br>"  . "</center>";
                }
            } else {
                echo "<center> 0 results </center>";
            }
            ?>
        </div>

        <br><br>

        <form class="box" action="/Fonctions/ajouter.php" method="post">
            <br><br>
            <input type="submit" class="button" value="AJOUTER"></input>
            <br><br>
            <input class="w3-input w3-hover-brown" type="text" name="activity" placeholder="inserez la tache à ajouter" required>
            <br>
            <input class="w3-input w3-hover-brown" type="text" name="date" placeholder="inserez la date de la tache" required>
            <br>
            <input class="w3-input w3-hover-brown" type="text" name="heure" placeholder="inserez l'heure prevue" required>
            <br>
            <input class="w3-input w3-hover-brown" type="text" name="personne_chargee" placeholder="inserez la personne chargée de la tache" required>
            <br>
            <select name="etat" id="etat" required>
                <span>Etat</span>
                <option value="Faite">Fait</option>
                <option value="Pas faite">Non fait</option>
                <option value="En cours">En cours</option>
            </select>
            <br>
        </form>
        <br>
        <form class="box" action="/Fonctions/supprimer.php" method="post">
            <input type="submit" class="button" value="SUPPRIMER"></input>
            <br> <br>
            <input class="w3-input w3-hover-brown" type="int" name="activity" placeholder="inserez l'ID de la tache à supprimer" required>
            <br>
        </form>

        <form class="box" action="/Fonctions/rechercher.php" method="post">
            <input type="submit" class="button" value="RECHERCHER"></input>
            <br> <br>
            <input class="w3-input w3-hover-brown" type="text" name="activity" placeholder="inserez la tache à rechercher" required>
            <br>
        </form>

        <br> <br>
        <div id="deconnexion">
            <center> <a href="/index.html">Déconnexion</a> </center>
        </div>
    </div>
    <br><br>
    <?php require '../footer/footer.php' ?>
</body>

</html>
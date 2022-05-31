<!DOCTYPE html>
<html>

<head>
    <title>Mon compte</title>
    <link rel="stylesheet" href="/CSS/log_client.css">
</head>

<body>
    <?php
    require('../config/config.php');


    session_start();

    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($conn, $username);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn, $password);

        $query = "SELECT * FROM `client` WHERE Login ='$username' and Pwd ='$password'";

        $result = mysqli_query($conn, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);

        if ($rows == 1) {
            $_SESSION['username'] = $username;
            header("Location: after_log.php");
        } else {
            $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
        }
    }
    ?>

    <header>
        <nav>
            <ul>
                <li><a href="/PHP/client/register_client.php">Inscription</a></li>
                <li><a href="/index.html">Acceuil</a></li>
            </ul>
        </nav>
    </header>


    <form class="box" action="" method="POST" name="login">
        <h1 class="box-logo box-title">ToDoList</h1>
        <h1 class="box-title">Connexion</h1>

        <input type="text" class="box-input" name="username" placeholder="login">

        <input type="password" class="box-input" name="password" placeholder="Mot de passe">

        <input type="submit" value="connexion" name="submit" class="box-button">

        <?php if (!empty($message)) { ?>
            <p class="errorMessage"><?php echo $message; ?></p>
        <?php } ?>
    </form>
    <?php include('../footer/footer.php'); ?>
</body>

</html>
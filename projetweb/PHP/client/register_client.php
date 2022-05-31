<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="/CSS/log_client.css">
</head>

<body>
    <header>
        <nav>
            <ul id>
                <li><a href="/index.html">Retour vers l'acceuil</a></li>
                <li><a href="/PHP/client/login_client.php">J'ai déja un compte</a></li>
            </ul>
        </nav>
    </header>
    <form class="box" action="/Fonctions/registration.php" method="post">

        <h1 class="box-logo box-title"></h1>

        <h1 class="box-title">S'inscrire</h1>

        <input type="text" class="box-input" name="username" placeholder="Nom d'utilisateur" required />

        <input type="password" class="box-input" name="password" placeholder="Mot de passe" required />

        <input type="text" class="box-input" name="nom" placeholder="Inserer votre Nom" required />

        <input type="text" class="box-input" name="prenom" placeholder="Inserer votre prenom" required />

        <input type="Email" class="box-input" name="email" placeholder="email" required />

        <input type="tel" class="box-input" name="tel" placeholder="Votre numero" />

        <input type="text" class="box-input" name="adresse" placeholder="Votre adresse" />

        <p>Sexe : </p>
        <input type="radio" name="sexe" value="masculin" /> Homme

        <input type="radio" name="sexe" value="feminin" /> Femme

        <div>
            <p> nationalite : </p>
            <select name="nationalite" id="etat">
                <option name="alg" value="Algerie">Algerie
                <option name="fra" value="France">France
                <option name="eng" value="Angleterre">England
                <option name="all" value="Allemagne">Allemagne
                <option name="tun" value="Tunisie">Tunisie
                <option name="mar" value="Maroc">Maroc
            </select>
        </div>
        <div>
            <p> interets : </p>
            <input type="checkbox" name="centres" value="sport">sport
            <input type="checkbox" name="centres" value="musique">musique
            <input type="checkbox" name="centres" value="dessin"> dessin
            <input type="checkbox" name="centres" value="cinema"> cinema
        </div>
        <div>
            <p>VIP</p>
            <input type="radio" name="vip" value="oui"> oui
            <input type="radio" name="vip" value="non"> non
        </div>

        <input type="submit" name="submit" value="S'inscrire" class="box-button" />

        <p class="box-register">Déjà inscrit? <a href="login_client.php">Connectez-vous ici</a></p>

    </form>
    <?php include '../footer/footer.php'; ?>
</body>

</html>
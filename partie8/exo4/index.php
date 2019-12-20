<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>Exercice 4</h1>
        <?php
        if(!empty($_COOKIE['loginCookie']) && !empty($_COOKIE['passwordCookie'])){
        $login = $_COOKIE['loginCookie'];
        $password = $_COOKIE['passwordCookie']; ?>
        <p>Votre indentifiant est <span><?= $login ?></span> et votre mot de passe est <span><?= $password ?></span> ! Je sais tout HAHAHAHA ! </p>
        <?php }else{ ?>
        <p>Aucun cookie détecté !</p>
        <?php } ?>
        <a title="Lien vers l'exercice précédent" href="http://phpp8/exo3/index.php">Exercice précédent</a>
        <a title="Lien vers l'exercice suivant" href="http://phpp8/exo5/index.php">Exercice suivant</a>
    </body>
</html>

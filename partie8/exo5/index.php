<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5</title>
    </head>
    <body>
        <h1>Exercice 5</h1>
        <?php
        $login = $_COOKIE['loginCookie'];
        $password = $_COOKIE['passwordCookie'];
        ?>
        <p>Avant, votre indentifiant était <span><?= $login ?></span> et votre mot de passe était <span><?= $password ?></span> !</p>
        <?php if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        setcookie('loginCookie', $login, time() + 3600, '/', null ,false ,true);
        setcookie('passwordCookie', $password, time() + 3600, '/', null ,false ,true);
        }else{ ?>
    <p>Veuillez entrer votre nouvel identifiant et votre nouveau mot de passe dans le formulaire suivant :</p>
    <form class="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="login">Identifiant : </label><input type="text" name="login" />
      <label for="password">Mot de passe : </label><input type="password" name="password" />
      <input type="submit" name="submit" value ="Envoyer" />
    </form>
    <?php } ?>
        <p>Maintenant, votre identifiant est <span><?= $login ?></span> et votre mot de passe est <span><?= $password ?></span> !</p>
        <a title="Lien vers l'exercice précédent" href="http://phpp8/exo4/index.php">Exercice précédent</a>
    </body>
</html>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>Exercice 3</title>
  </head>
  <body>
    <h1>Exercice 3</h1>
    <?php if(!empty($_POST['login']) && !empty($_POST['password'])){
        $login = $_POST['login'];
        $password = $_POST['password'];
        setcookie('loginCookie', $login, time() + 3600, '/', null ,false ,true);
        setcookie('passwordCookie', $password, time() + 3600, '/', null ,false ,true); ?>
    <p>Merci pour votre bienveillante collaboration</p>
    <?php }else{ ?>
    <p>Veuillez entrer votre identifiant et votre mot de passe dans le formulaire suivant :</p>
    <form class="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="login">Identifiant : </label><input type="text" name="login" />
      <label for="password">Mot de passe : </label><input type="password" name="password" />
      <input type="submit" name="submit" value ="Envoyer" />
    </form>
    <?php } ?>
    <a title="Lien vers l'exercice précédent" href="http://phpp8/exo2/index.php">Exercice précédent</a>
    <a title="Lien vers l'exercice suivant" href="http://phpp8/exo4/index.php">Exercice suivant</a>
  </body>
</html>

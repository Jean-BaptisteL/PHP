<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2</title>
  </head>
  <body>
    <?php session_start(); ?>
    <h1>Exercice 2 suite</h1>
    <p>Bonjour! Je suis le Capitaine <?= $_SESSION['firstname'] ?> <?= $_SESSION['lastname'] ?> du Broken Mirror.<br />J'ai <?= $_SESSION['age'] ?> ans.</p>
    <a href="http://phpp8/exo1/index.php">Exercice précédent</a>
    <a href="http://phpp8/exo3/index.php">Exercice suivant</a>
  </body>
  <?php
  session_unset();
  session_destroy();
  ?>
</html>

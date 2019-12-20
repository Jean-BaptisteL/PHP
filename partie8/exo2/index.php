<?php session_start();
$_SESSION['lastname'] = 'Gloomy';
$_SESSION['firstname'] = 'Jean-Claude';
$_SESSION['age'] = '31';
session_write_close();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Exercice 2</title>
  </head>
  <body>
    <h1>Exercice 2</h1>
    <p>Voici <a class="secondPage" href="secondPage.php" title="Lien vers la suite de l'exercice">un lien</a> vers la suite de l'exercice.</p>
  </body>
</html>

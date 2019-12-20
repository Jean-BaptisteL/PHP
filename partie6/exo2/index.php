<?php
  if (isset($_GET['lastname']) && isset($_GET['firstname']) && isset($_GET['age'])) {
    $testedUrl = $_GET['firstname'] . ' ' . $_GET['lastname'];
  }else{
    $testedUrl = 'Il manque votre âge !';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <p><?= $testedUrl ?></p>
  </body>
</html>

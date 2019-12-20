<?php
  if (!empty($_GET['building']) && !empty($_GET['room'])) {
    $testMyUrl = 'C\'est dans le bâtiment n°' . $_GET['building'] . ' et la salle n°' . $_GET['room'] . '.';
  }else if (empty($_GET['building']) && !empty($_GET['room'])) {
    $testMyUrl = 'Il manque le numéro du bâtiment.';
  }else if (!empty($_GET['building']) && empty($_GET['room'])) {
    $testMyUrl = 'Il manque le numéro de la salle.';
  }else{
    $testMyUrl = 'C\'est où du coup ?';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>
    <p><?= $testMyUrl ?></p>
  </body>
</html>

<?php
  if (isset($_GET['week'])) {
    $testMyUrl = 'Le nombre de semaine est ' . $_GET['week'] . '.';
  }else{
    $testMyUrl = 'Il manque le nombre de semaines.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
  </head>
  <body>
    <p><?= $testMyUrl ?></p>
  </body>
</html>

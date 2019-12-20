<?php
  if (isset($_GET['language']) && isset($_GET['server'])) {
    $testMyUrl = 'Le langage utilisé est ' . $_GET['language'] . ' et le serveur est ' . $_GET['server'] . '.';
  }else if (isset($_GET['language']) == false && isset($_GET['server'])) {
    $testMyUrl = 'Il manque le language.';
  }else if (isset($_GET['language']) && isset($_GET['server']) == false) {
    $testMyUrl = 'Il manque le serveur.';
  }else{
    $testMyUrl = 'Il manque le language et le serveur.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>
    <p><?= $testMyUrl ?></p>
  </body>
</html>

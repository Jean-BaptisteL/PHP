<?php
  if (isset($_GET['lastname']) && isset($_GET['firstname'])) {
    $testedUrl = $_GET['firstname'] . ' ' . $_GET['lastname'];
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 1</title>
  </head>
  <body>
    <p><?= 'Bonjour ' . $testedUrl . ' ! Comment allez-vous ?' ?></p>
  </body>
</html>

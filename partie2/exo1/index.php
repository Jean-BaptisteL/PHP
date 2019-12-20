<?php
  $age = 27;
  if ($age >= 18) {
    $majorOrMinor = 'Vous êtes majeur !';
  } else {
    $majorOrMinor = 'Vous êtes mineur !';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo 1</title>
  </head>
  <body>
    <p><?= $majorOrMinor ?></p>
  </body>
</html>

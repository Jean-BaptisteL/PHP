<?php
  $age = 75;
  if ($age >= 18) {
    $majorOrMinor = 'Tu es majeur !';
  } else {
    $majorOrMinor = 'Tu n\'es pas majeur !';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo6</title>
  </head>
  <body>
    <p><?= $majorOrMinor?></p>
  </body>
</html>

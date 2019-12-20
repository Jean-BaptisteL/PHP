<?php
  $gender = 'Homme';
  if ($gender != 'Homme') {
    $developer = 'C\'est une développeuse !!!';
  } else {
    $developer = 'C\'est un développeur !!!';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo 5</title>
  </head>
  <body>
    <p><?= $developer ?></p>
  </body>
</html>

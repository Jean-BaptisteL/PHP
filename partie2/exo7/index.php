<?php
  $isOk = true;
  if ($isOk == false) {
    $okOrNot = 'C\'est pas bon !!!';
  } else {
    $okOrNot = 'C\'est ok !!';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo 7</title>
  </head>
  <body>
    <p><?= $okOrNot ?></p>
  </body>
</html>

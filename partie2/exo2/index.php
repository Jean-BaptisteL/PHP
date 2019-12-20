<?php
  $isEasy=true;
  if ($isEasy==true) {
    $easyOrNot = 'C\'est facile !';
  } else {
    $easyOrNot = 'C\'est difficile !';
  }
  if (!$isEasy) {
    $easyOrNot = 'C\'est difficile !';
  } else {
    $easyOrNot = 'C\'est facile !';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo 2</title>
  </head>
  <body>
    <p><?= $easyOrNot ?></p>
  </body>
</html>

<?php
  function myFunction($one, $two){
    return $one . ' ' . $two;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
  </head>
  <body>
    <p><?= myFunction(25, 'cm')?></p>
  </body>
</html>

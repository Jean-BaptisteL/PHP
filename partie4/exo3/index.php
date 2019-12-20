<?php
  function myFunction($wordOne, $wordTwo){
    return $wordOne . ' ' . $wordTwo;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <?= myFunction('Pachycéphalosaurus', 'Orchidoclaste')?>
  </body>
</html>

<?php
  function myFunction($numberOne, $numberTwo){
    if ($numberOne == $numberTwo) {
      $result = 'Les deux nombres sont identiques';
    } else if ($numberOne < $numberTwo) {
      $result = 'Le premier nombre est plus petit';
    }else {
      $result = 'Le premier nombre est plus grand';
    }
    return $result;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>
    <p><?= myFunction(1, 2)?></p>
  </body>
</html>

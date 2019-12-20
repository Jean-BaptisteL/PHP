<?php
  function myFonction($numberOne=15, $numberTwo=42, $numberThree=85){
    return $numberOne + $numberTwo + $numberThree;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 8</title>
  </head>
  <body>
    <p><?= myFonction()?></p>
  </body>
</html>

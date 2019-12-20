<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <?php
      $number = 100;
      $numberTwo = rand(1,100);
      while ($number >= 10) { ?>
    <p><?php $result = $number*$numberTwo;
        echo $result;
        $number--;
      }?></p>
  </body>
</html>

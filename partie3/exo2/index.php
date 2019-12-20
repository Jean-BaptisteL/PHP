<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 2</title>
  </head>
  <body>
    <?php
      $number = 0;
      $numberTwo = rand(1,100);
      while ($number <= 20) { ?>
    <p><?php $result = $number*$numberTwo;
        echo $result;
        $number++;
      }?></p>
  </body>
</html>

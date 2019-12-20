<?php
  $number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>
    <?php
        while ($number <= 10) { ?>
    <p><?php
          echo $number;?></p>
      <?php $number = $number + ($number / 2);
        }?>
  </body>
</html>

<?php
  function myFunction($lastname, $firstname, $age){
    return 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 6</title>
  </head>
  <body>
    <p><?= myFunction('Lagand', 'Jean-Baptiste', 27)?></p>
  </body>
</html>

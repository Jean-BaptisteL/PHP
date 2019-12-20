<?php
  if (isset($_GET['startDate']) && isset($_GET['endDate'])) {
    $testedUrl = 'La P4 s\'est déroulée du ' . $_GET['startDate'] . ' au ' . $_GET['endDate'] . '.';
  }else if(isset($_GET['startDate']) && isset($_GET['endDate'])==false){
    $testedUrl = 'Il manque la date de fin.';
  }else if(isset($_GET['startDate'])==false && isset($_GET['endDate'])){
    $testedUrl = 'Il manque la date de début.';
  }else{
    $testedUrl = 'Il manque les dates de début et de fin.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 3</title>
  </head>
  <body>
    <p><?= $testedUrl  ?></p>
  </body>
</html>

<?php
  if (empty($_GET['firstname']) == false && empty($_GET['lastname']) == false) {
    $testedUrl = 'Bonjour ' . $_GET['firstname'] . ' ' . $_GET['lastname'] . ' ! Comment vas-tu ?';
  }else if(empty($_GET['firstname']) == false && empty($_GET['lastname'])){
    $testedUrl = 'Bonjour ' . $_GET['firstname'] . ' ! C\'est quoi ton nom ?';
  }else if(empty($_GET['firstname']) && empty($_GET['lastname']) == false){
    $testedUrl = 'Salut ' . $_GET['lastname'] . ' ! Bien ou bien ? Je ne connais même pas ton prénom !';
  }else{
    $testedUrl = 'Salut à toi illustre anonyme !';
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

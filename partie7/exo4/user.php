<?php
  if (empty($_POST['firstname']) == false && empty($_POST['lastname']) == false) {
    $testedUrl = 'Bonjour ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' ! Comment vas-tu ?';
  }else if(empty($_POST['firstname']) == false && empty($_POST['lastname'])){
    $testedUrl = 'Bonjour ' . $_POST['firstname'] . ' ! C\'est quoi ton nom ?';
  }else if(empty($_POST['firstname']) && empty($_POST['lastname']) == false){
    $testedUrl = 'Salut ' . $_POST['lastname'] . ' ! Bien ou bien ? Je ne connais même pas ton prénom !';
  }else{
    $testedUrl = 'Salut à toi illustre anonyme !';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 4</title>
  </head>
  <body>
    <p><?= $testedUrl  ?></p>
  </body>
</html>

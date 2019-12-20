<?php
  $age = 16;
  $gender = 'Homme';
  if ($gender == 'Homme') {
    $genderSentence = 'un homme';
  } else {
    $genderSentence = 'une femme';
  }
  if ($age >= 18) {
    $ageSentence = 'vous êtes majeur !';
  } else {
    $ageSentence = 'vous êtes mineur !';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo 3</title>
  </head>
  <body>
    <p>Vous êtes <?= $genderSentence ?> et <?= $ageSentence ?></p>
  </body>
</html>

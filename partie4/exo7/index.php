<?php
  function genderAndAge($gender, $age){
    if ($gender == 'Homme' && $age >= 18) {
      $majorOrMinor = 'Vous êtes un homme et vous êtes majeur';
    } else if ($gender == 'Homme' && $age < 18){
      $majorOrMinor = 'Vous êtes un homme et vous êtes mineur';
    }else if ($gender == 'Femme' && $age >= 18){
      $majorOrMinor = 'Vous êtes une femme et vous êtes majeur';
    }else{
      $majorOrMinor = 'Vous êtes une femme et vous êtes mineur';
    }
    return $majorOrMinor;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p><?= genderAndAge('Homme', 27)?></p>
    <p><?= genderAndAge('Homme', 7)?></p>
    <p><?= genderAndAge('Femme', 18)?></p>
    <p><?= genderAndAge('Femme', 2)?></p>
  </body>
</html>

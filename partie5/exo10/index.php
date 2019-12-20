<?php $departments = array (
  '59' => 'Nord',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
  '02' => 'Aisne',
  '60' => 'Oise',
  '51' => 'Marne');
?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 10</title>
  </head>
  <body>
    <?php
      foreach ($departments as $departmentNumber => $departmentName) {?>
    <p><?= 'Le département n°' . $departmentNumber . ' a pour nom : ' . $departmentName; ?></p>
  <?php } ?>
  </body>
</html>

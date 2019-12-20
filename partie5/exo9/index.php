<?php $departments = array (
  '59' => 'Nord',
  '62' => 'Pas-de-Calais',
  '80' => 'Somme',
  '02' => 'Aisne',
  '60' => 'Oise',
  '51' => 'Marne');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 9</title>
</head>
<body>
  <?php
    foreach ($departments as $departmentName) {?>
      <p><?= $departmentName; ?></p>
    <?php } ?>
  </body>
  </html>

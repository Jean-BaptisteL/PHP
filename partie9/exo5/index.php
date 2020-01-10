<?php
    $today = time();
    $otherDate = mktime(0, 0, 0, 5, 16, 2016);
    $numberOfDays = ($today - $otherDate) / 3600 / 24;
    $numberOfDays = floor($numberOfDays);
    //en version objet
    $dateObject1 = new DateTime('16-05-2016');
    $dateObject2 = new DateTime();
    $dateDiff = $dateObject1->diff($dateObject2);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 5</title>
    </head>
    <body>
        <h1>Exercice 5</h1>
        <p><?= $numberOfDays ?> jours se sont déroulés depuis le 16 mai 2016. Et voilà grâce à la méthode utilisant un objet : <?= $dateDiff->format('%a'); ?>.</p>
        <a title="Lien vers l'exercice précédent" href="http://phpp9/exo4/">Exercice précédent</a>
        <a title="Lien vers l'exercice suivant" href="http://phpp9/exo6/">Exercice suivant</a>
    </body>
</html>

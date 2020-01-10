<?php 
    $numberOfDays = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    $nbDays = new DateTime('01-02-2016');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head> 
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 6</title>
    </head>
    <body>
        <h1>Exercice 6</h1>
        <p>Le nombre de jours dans le mois de février 2016 était de <span><?= $numberOfDays ?></span> jours.</p>
        <p>Le nombre de jours dans le mois de février 2016 était de <span><?= $nbDays->format('t'); ?></span> jours en utilisant l'objet.</p>
        <a title="Lien vers l'exercice précédent" href="http://phpp9/exo5/">Exercice précédent</a>
        <a title="Lien vers l'exercice suivant" href="http://phpp9/exo7/">Exercice suivant</a>
    </body>
</html>
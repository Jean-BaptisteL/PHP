<?php
    //Le format de la date doit être en Y/m/d sinon ça ne marche pas !
    $dateToday = date('Y/m/d');
    $date = date('Y/m/d', strtotime('-22 days', strtotime($dateToday)));
    //Version objet
    $dateObj = new DateTime($dateToday);
    $dateObj->sub(new DateInterval('P22D'));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head> 
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 8</title>
    </head>
    <body>
        <h1>Exercice 8</h1>
        <p>Il y a 22 jours, nous étions le <span><?= $date  ?></span> ou le <span><?= $dateObj->format('d/m/Y') ?></span> avec la méthode objet.</p>
        <a title="Lien vers l'exercice précédent" href="http://phpp9/exo7/">Exercice précédent</a>
        <a title="Lien vers l'exercice suivant" href="http://phpp9/tp/">Exercice suivant</a>
    </body>
</html>
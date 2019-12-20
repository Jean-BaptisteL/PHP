<?php
    //Le format de la date doit être en Y/m/d sinon ça ne marche pas !
    $dateToday = date('Y/m/d');
    $date = new DateTime($dateToday);
    $date->add(new DateInterval('P20D'));
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head> 
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 7</title>
    </head>
    <body>
        <h1>Exercice 7</h1>
        <p>Dans 20 jours, nous serons le <span><?= $date->format('d/m/Y')  ?></span>.</p>
        <a title="Lien vers l'exercice précédent" href="http://phpp9/exo6/">Exercice précédent</a>
        <a title="Lien vers l'exercice suivant" href="http://phpp9/exo8/">Exercice suivant</a>
    </body>
</html>
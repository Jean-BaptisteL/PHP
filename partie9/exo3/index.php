<?php
    /*$days = array('Monday' => 'Lundi', 'Thuesday' => 'Mardi', 'Wednesday' => 'Mercredi', 'Thursday' => 'Jeudi', 'Friday' => 'Vendredi', 'Saturday' => 'Samedi', 'Sunday' => 'Dimanche');
    $frenchDay = $days[date('l')];
    $months = array ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
    $frenchMonth = $months[date('n')-1];*/
    setlocale(LC_TIME, 'fr_FR.utf-8');
    $date = strftime('%A %d %B %G');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" /> 
        <title>Exercice 3</title>
    </head>
    <body>
        <h1>Exercice 3</h1>
        <p>Bonjour, nous sommes le <span><?= /*$frenchDay . ' ' . date('d') . ' ' . $frenchMonth . ' '. date('Y')*/ $date ?></span>.</p>
    <a title="Lien vers l'exercice précédent" href="http://phpp9/exo2/">Exercice précédent</a>
    <a title="Lien vers l'exercice suivant" href="http://phpp9/exo4/">Exercice suivant</a>
    </body>
</html>
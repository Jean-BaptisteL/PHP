<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" /> 
        <title>Exercice 1</title>
    </head>
    <body>
        <h1>Exercice 1</h1>
        <p>Bonjour, nous sommes le <span><?= date('d/m/Y') ?></span>.</p>
        <?php
        //Avec un objet
        $date = new DateTime();
        //On appelle la méthode format de l'objet DateTime
        echo $date->format('d/m/Y');
        ?>
    </body>
    <a title="Lien vers l'exercice suivant" href="http://phpp9/exo2/">Exercice suivant</a>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" /> 
        <title>Exercice 2</title>
    </head>
    <body>
        <h1>Exercice 2</h1>
        <p>Bonjour, nous sommes le <span><?= date('d-m-y') ?></span>.</p>
        <?php
        $date = new DateTime();
        ?>
        <p>La date avec un objet wesh ! : <span><?= $date->format('d-m-y'); ?></span></p>
    <a title="Lien vers l'exercice précédent" href="http://phpp9/exo1/">Exercice précédent</a>
    <a title="Lien vers l'exercice suivant" href="http://phpp9/exo3/">Exercice suivant</a>
    </body>
</html>
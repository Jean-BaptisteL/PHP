<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Exercice 4</title>
    </head>
    <body>
        <h1>Exercice 4</h1>
        <p>Voici le timestamp d'aujourd'hui : <span><?= time() ?></span> !</p>
        <p>Et voici le timestamp du mardi 2 août 2016 à 15h00 : <span><?= mktime(15, 0, 0, 8, 2, 2016) ?></span> !</p>
        <a title="Lien vers l'exercice précédent" href="http://phpp9/exo3/">Exercice précédent</a>
        <a title="Lien vers l'exercice suivant" href="http://phpp9/exo5/">Exercice suivant</a>
    </body>
</html>
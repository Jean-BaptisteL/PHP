<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="stylesheet" href="style.css">
    <title>Exercice 1</title>
  </head>
  <body>
    <h1>Exercice 1</h1>
    <div class="answers">
      <p>L'User-Agent est : <span><?= $_SERVER['HTTP_USER_AGENT'] ?></span> !</p>
      <p>L'adresse IP est : <span><?= $_SERVER['REMOTE_ADDR'] ?></span> !</p>
      <p>Le nom du serveur est : <span><?= $_SERVER['SERVER_NAME'] ?></span> !</p>
    </div>
    <a href="http://phpp8/exo2/index.php">Exercice suivant</a>
  </body>
</html>

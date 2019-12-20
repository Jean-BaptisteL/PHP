<?php
  if (empty($_POST['firstname']) == false && empty($_POST['lastname']) == false && empty($_POST['gender']) == false) {
    $testedUrl = 'Bonjour ' . $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . ' ! Comment vas-tu ?';
  }else{
    $testedUrl = 'Veuillez remplir correctement le formulaire.';
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      <label for="gender">Civilité : </label><select name="gender" id="gender">
          <option disabled selected>Sélectionnez</option>
        <option>M.</option>
        <option>Mme.</option>
      </select>
      <label for="lastname">Nom : </label><input type="text" name="lastname" placeholder="Dupont" />
      <label for="firstname">Prénom : </label><input type="text" name="firstname" placeholder="Gustave" />
      <input type="submit" value="Envoyer" />
    </form>
    <p><?= $testedUrl ?></p>
  </body>
</html>

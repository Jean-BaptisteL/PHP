<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 8</title>
  </head>
  <body>
      <?php
        if (!empty($_POST['gender']) && ($_POST['gender'] == 'M.' || $_POST['gender'] == 'Mme.') && !empty($_POST['lastname']) && preg_match('/^[A-Za-z\séèêëîïàçù-]+$/', $_POST['lastname']) && !empty($_POST['firstname']) && preg_match('/^[A-Za-z\séèêëîïàçù-]+$/', $_POST['lastname']) && pathinfo($_POST['uploadFile'],PATHINFO_EXTENSION)=='pdf') {
      ?>
          <p><?php echo $_POST['gender'] . ' ' . $_POST['firstname'] . ' ' . $_POST['lastname'] . '. Ton fichier est ' . $_POST['uploadFile'];?></p>
      <?php
        }else{?>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
          <label for="gender">Civilité : </label><select name="gender" id="gender">
            <option value="">Selectionnez</option>
            <option value="M.">M.</option>
            <option value="Mme.">Mme.</option>
          </select>
          <label for="lastname">Nom : </label><input type="text" name="lastname" placeholder="Dupont" />
          <label for="firstname">Prénom : </label><input type="text" name="firstname" placeholder="Gustave" />
          <input type="file" name="uploadFile" />
          <input type="submit" value="Envoyer" />
        </form>
      <?php
        }?>
  </body>
</html>

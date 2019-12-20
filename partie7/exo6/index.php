<?php
$regexName = '/^[A-Z][a-zéèêàâîôùç\s-A-Z]+$/';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <?php if(count($_POST) > 0 || count($_GET) > 0){ 
        if($_POST['gender'] == 'M.' || $_POST['gender'] == 'Mme.'){?>
      <p><?php echo $_POST['gender'] ?></p>
    <?php }
        if(preg_match($regexName, $_POST['lastname'])){?>
      <p><?php echo $_POST['lastname']?></p>
    <?php }
        if(preg_match($regexName, $_POST['firstname'])){?>
      <p><?php echo $_POST['firstname']?></p>
    <?php }
    }else{?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
      <label for="gender">Civilité : </label><select name="gender" id="gender">
        <option value="">Selectionnez</option>
        <option value="M.">M.</option>
        <option value="Mme.">Mme.</option>
      </select>
      <label for="lastname">Nom : </label><input type="text" name="lastname" placeholder="Dupont" />
      <label for="firstname">Prénom : </label><input type="text" name="firstname" placeholder="Gustave" />
      <input type="submit" value="Envoyer" />
    </form>
    <?php } ?> 
  </body>
</html>

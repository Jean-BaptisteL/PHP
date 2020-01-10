<?php
$regexName = '/^[A-Z][a-zéèêàâîôùç\s-A-Z]+$/';
$firstname = $lastname = $birthday = $country = $nationality = $address = $email = $phoneNumber = $diploma = $poleEmploiNumber = $numberOfBadges = $codecademyLink = $hero = $hack = $experience = false;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="assets/style.css" />
        <title>TP 1</title>
    </head>
    <body>
        <h1>TP 1</h1>
        <?php if($firstname == false || $lastname == false || $birthday == false || $country == false || $nationality == false || $address == false || $email == false || $phoneNumber == false || $diploma == false || $poleEmploiNumber == false || $numberOfBadges == false || $codecademyLink == false || $hero == false || $hack == false || $experience == false){ ?>
        <h2>Remplissez ce formulaire pour vous inscrire :</h2>
        <fieldset>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <?php
                if (!empty($_POST['firstname']) && preg_match($regexName, $_POST['firstname'])) {
                    $firstname = true;
                ?>
                <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" class="trueInput" value="<?= $_POST['firstname'] ?>" required/>
                <?php }else if (!empty($_POST['firstname']) && preg_match($regexName, $_POST['firstname']) == false){ ?>
                <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" class="falseInput" value="<?= $_POST['firstname'] ?>" required/>
                <?php }else{ ?>
                <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" placeholder="Jean-Claude" required/>
                <?php }
                if (!empty($_POST['lastname']) && preg_match($regexName, $_POST['lastname'])) {
                    $lastname = true;
                ?>
                <label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" class="trueInput" value="<?= $_POST['lastname'] ?>" required/>
                <?php }else if (!empty($_POST['lastname']) && preg_match($regexName, $_POST['lastname']) == false){ ?>
                <label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" class="falseInput" value="<?= $_POST['lastname'] ?>" required/>
                <?php }else{ ?>
                <label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" placeholder="Gloomy" required/>
                <?php }
                if (!empty($_POST['birthday']) && preg_match('/^[0-9]{4}-0[1-9]|1[0-2]-[0-2][0-9]|3[0-1]$/', $_POST['birthday'])){
                    $dateArray = explode('-', $_POST['birthday']);
                }
                if (!empty($_POST['birthday']) && checkdate($dateArray[1], $dateArray[2], $dateArray[0]) == true){
                    $birthday = true;
                ?>
                <label for="birthday">Date de naissance : </label><input type="date" name="birthday" id="birthday" class="trueInput" value="<?= $_POST['birthday'] ?>" required/>
                <?php }else if (!empty($_POST['birthday']) && checkdate($dateArray[1], $dateArray[2], $dateArray[0]) == false){ ?>
                <label for="birthday">Date de naissance : </label><input type="date" name="birthday" id="birthday" class="falseInput" value="<?= $_POST['birthday'] ?>" required/>
                <?php }else{ ?>
                <label for="birthday">Date de naissance : </label><input type="date" name="birthday" id="birthday" required/>
                <?php }
                if (!empty($_POST['country']) && preg_match($regexName, $_POST['country'])){
                    $country = true; ?>
                <label for="country">Pays : </label><input type="text" name="country" id="country" class="trueInput" value="<?= $_POST['country'] ?>" required/>
                <?php }else if (!empty($_POST['country']) && preg_match($regexName, $_POST['country']) == false){ ?>
                <label for="country">Pays : </label><input type="text" name="country" id="country" placeholder="France" class="falseInput" value="<?= $_POST['country'] ?>" required/>
                <?php }else{ ?>
                <label for="country">Pays : </label><input type="text" name="country" id="country" placeholder="France" required/>
                <?php } 
                if (!empty($_POST['nationality']) && preg_match('/^[a-zéèêàâîôùç\s-]+$/', $_POST['nationality'])){
                    $nationality = true; ?>
                <label for="nationality">Nationalité : </label><input type="text" name="nationality" id="nationality" class="trueInput" value="<?= $_POST['nationality'] ?>" required/>
                <?php }else if (!empty($_POST['nationality']) && preg_match('/^[a-zéèêàâîôùç\s-]+$/', $_POST['nationality']) == false){ ?>
                <label for="nationality">Nationalité : </label><input type="text" name="nationality" id="nationality" placeholder="française" class="falseInput" value="<?= $_POST['nationality'] ?>" required/>
                <?php }else{ ?>
                <label for="nationality">Nationalité : </label><input type="text" name="nationality" id="nationality" placeholder="française" required/>
                <?php }
                if (!empty($_POST['address']) && preg_match('/^[0-9A-Za-zéèêàâîôùç\s-]+$/', $_POST['address'])){
                    $address = true; ?>
                <label for="address">Adresse : </label><input type="text" name="address" id="address" value="<?= $_POST['address'] ?>" class="trueInput" required/>
                <?php }else if (!empty($_POST['address']) && preg_match('/^[0-9A-Za-zéèêàâîôùç\s-]+$/', $_POST['address']) == false){ ?>
                <label for="address">Adresse : </label><input type="text" name="address" id="address" value="<?= $_POST['address'] ?>" class="falseInput" required/>
                <?php }else{ ?>
                <label for="address">Adresse : </label><input type="text" name="address" id="address" placeholder="4 rue Lamoufle 50220 Là-bas" required/>
                <?php }
                if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                    $email = true; ?>
                <label for="email">Adresse mail : </label><input type="email" name="email" id="email" class="trueInput" value="<?= $_POST['email'] ?>" required/>
                <?php }else if (!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){ ?>
                <label for="email">Adresse mail : </label><input type="email" name="email" id="email" class="falseInput" value="<?= $_POST['email'] ?>" required/>
                <?php }else{ ?> 
                <label for="email">Adresse mail : </label><input type="email" name="email" id="email" placeholder="truc@monmail.fr" required/>
                <?php }
                if (!empty($_POST['phoneNumber']) && preg_match('/^0[0-9][0-9]{8}$/', $_POST['phoneNumber'])){
                    $phoneNumber = true; ?>
                <label for="phoneNumber">Numéro de tél. : </label><input type="tel" name="phoneNumber" id="phoneNumber" class="trueInput" value="<?= $_POST['phoneNumber'] ?>" /required>
                <?php }else if (!empty($_POST['phoneNumber']) && preg_match('/^0[0-9][0-9]{8}$/', $_POST['phoneNumber']) == false){ ?>
                <label for="phoneNumber">Numéro de tél. : </label><input type="tel" name="phoneNumber" id="phoneNumber" class="falseInput" value="<?= $_POST['phoneNumber'] ?>" required/>
                <?php }else{ ?>
                <label for="phoneNumber">Numéro de tél. : </label><input type="tel" name="phoneNumber" id="phoneNumber" placeholder="0601010101" required/>
                <?php }
                if (!empty($_POST['diploma']) && ($_POST['diploma'] == 'whithout' || $_POST['diploma'] == 'bac' || $_POST['diploma'] == 'bac+2' || $_POST['diploma'] == 'bac+3')){
                    $diploma = true; ?>
                <label for="diploma">Niveau d'étude : </label><select name="diploma" id="diploma" class="trueInput" required>
                    <option value="" disabled>--Sélectionnez votre niveau d'étude--</option>
                    <?php if (isset($_POST['diploma']) && $_POST['diploma'] == 'whithout'){ ?>
                    <option value="whithout" selected>Sans diplôme</option>
                    <?php }else{ ?>
                    <option value="whithout">Sans diplôme</option>
                    <?php }
                    if (isset($_POST['diploma']) && $_POST['diploma'] == 'bac'){ ?>
                    <option value="bac" selected>Bac</option>
                    <?php }else{ ?>
                    <option value="bac">Bac</option>
                    <?php }
                    if (isset($_POST['diploma']) && $_POST['diploma'] == 'bac+2'){ ?>
                    <option value="bac+2" selected>Bac +2</option>
                    <?php }else{ ?>
                    <option value="bac+2">Bac +2</option>
                    <?php }
                    if (isset($_POST['diploma']) && $_POST['diploma'] == 'bac+3'){ ?>
                    <option value="bac+3" selected>Bac +3 ou plus</option>
                    <?php }else{ ?>
                    <option value="bac+3">Bac +3 ou plus</option>
                    <?php } ?>
                </select>
                <?php }else if (!empty($_POST['diploma']) && ($_POST['diploma'] != 'whithout' || $_POST['diploma'] != 'bac' || $_POST['diploma'] != 'bac+2' || $_POST['diploma'] != 'bac+3')){ ?>
                <label for="diploma">Niveau d'étude : </label><select name="diploma" id="diploma" class="falseInput" required>
                    <option value="" disabled>--Sélectionnez votre niveau d'étude--</option>
                    <?php if (isset($_POST['diploma']) && $_POST['diploma'] == 'whithout'){ ?>
                    <option value="whithout" selected>Sans diplôme</option>
                    <?php }else{ ?>
                    <option value="whithout">Sans diplôme</option>
                    <?php }
                    if (isset($_POST['diploma']) && $_POST['diploma'] == 'bac'){ ?>
                    <option value="bac" selected>Bac</option>
                    <?php }else{ ?>
                    <option value="bac">Bac</option>
                    <?php }
                    if (isset($_POST['diploma']) && $_POST['diploma'] == 'bac+2'){ ?>
                    <option value="bac+2" selected>Bac +2</option>
                    <?php }else{ ?>
                    <option value="bac+2">Bac +2</option>
                    <?php }
                    if (isset($_POST['diploma']) && $_POST['diploma'] == 'bac+3'){ ?>
                    <option value="bac+3" selected>Bac +3 ou plus</option>
                    <?php }else{ ?>
                    <option value="bac+3">Bac +3 ou plus</option>
                    <?php } ?>
                </select>
                <?php }else{ ?>
                <label for="diploma">Niveau d'étude : </label><select name="diploma" id="diploma" required>
                    <option value="" disabled selected>--Sélectionnez votre niveau d'étude--</option>
                    <option value="whithout">Sans diplôme</option>
                    <option value="bac">Bac</option>
                    <option value="bac+2">Bac +2</option>
                    <option value="bac+3">Bac +3 ou plus</option>
                </select>
                <?php }
                if (!empty($_POST['poleEmploiNumber']) && preg_match('/^[0-9]{7}[A-Z]$/', $_POST['poleEmploiNumber'])){
                    $poleEmploiNumber = true; ?>
                <label for="poleEmploiNumber">Numéro Pôle Emploi : </label><input type="text" name="poleEmploiNumber" id="poleEmploiNumber" class="trueInput" value="<?= $_POST['poleEmploiNumber'] ?>" required/>
                <?php }else if (!empty($_POST['poleEmploiNumber']) && preg_match('/^[0-9]{7}[A-Z]$/', $_POST['poleEmploiNumber']) == false){ ?>
                <label for="poleEmploiNumber">Numéro Pôle Emploi : </label><input type="text" name="poleEmploiNumber" id="poleEmploiNumber" class="falseInput" value="<?= $_POST['poleEmploiNumber'] ?>" required/>
                <?php }else{ ?>
                <label for="poleEmploiNumber">Numéro Pôle Emploi : </label><input type="text" name="poleEmploiNumber" id="poleEmploiNumber" placeholder="1234567A" required/>
                <?php }
                if (!empty($_POST['numberOfBadges']) && filter_var($_POST['numberOfBadges'], FILTER_VALIDATE_INT)){
                    $numberOfBadges = true; ?>
                <label for="numberOfBadges">Nombre de badges : </label><input type="number" name="numberOfBadges" id="numberOfBadges" class="trueInput" value="<?= $_POST['numberOfBadges'] ?>" required/>
                <?php }else if (!empty($_POST['numberOfBadges']) && filter_var($_POST['numberOfBadges'], FILTER_VALIDATE_INT) == false){ ?>
                <label for="numberOfBadges">Nombre de badges : </label><input type="number" name="numberOfBadges" id="numberOfBadges" class="falseInput" value="<?= $_POST['numberOfBadges'] ?>" required/>
                <?php }else{ ?>
                <label for="numberOfBadges">Nombre de badges : </label><input type="number" name="numberOfBadges" id="numberOfBadges" required/>
                <?php }
                if (!empty($_POST['codecademyLink']) && filter_var($_POST['codecademyLink'], FILTER_VALIDATE_URL)){
                    $codecademyLink = true; ?>
                <label for="codecademyLink">Lien Codecademy : </label><input type="url" name="codecademyLink" id="codecademyLink" class="trueInput" value="<?= $_POST['codecademyLink'] ?>" required/>
                <?php }else if (!empty($_POST['codecademyLink']) && filter_var($_POST['codecademyLink'], FILTER_VALIDATE_URL) == false){ ?>
                <label for="codecademyLink">Lien Codecademy : </label><input type="url" name="codecademyLink" id="codecademyLink" class="falseInput" value="<?= $_POST['codecademyLink'] ?>" required/>
                <?php }else{ ?>
                <label for="codecademyLink">Lien Codecademy : </label><input type="url" name="codecademyLink" id="codecademyLink" required/>
                <?php }
                if (!empty($_POST['hero'])){
                    $hero = true; ?>
                <label for="hero">Si vous étiez un super héro, lequel seriez vous et pourquoi ? </label><textarea name="hero" id="hero" class="trueInput" required><?= $_POST['hero'] ?></textarea>
                <?php }else{ ?>
                <label for="hero">Si vous étiez un super héro, lequel seriez vous et pourquoi ? </label><textarea name="hero" id="hero" required></textarea>
                <?php }
                if (!empty($_POST['hack'])){
                    $hack = true; ?>
                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) </label><textarea name="hack" id="hack" class="trueInput" required><?= $_POST['hack'] ?></textarea>
                <?php }else{ ?>
                <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) </label><textarea name="hack" id="hack" required></textarea>
                <?php }
                if (!empty($_POST['experience'])){
                    $experience = true; ?>
                <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label><textarea name="experience" id="experience" class="trueInput" required><?= $_POST['experience'] ?></textarea>
                <?php }else{ ?>
                <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label><textarea name="experience" id="experience" required></textarea>
                <?php } ?>
                <input type="submit" name="addCandidate" id="addCandidate" value="Envoyer" />
            </form>
        </fieldset>
        <?php }
        if ($firstname == true && $lastname == true && $birthday == true && $country == true && $nationality == true && $address == true && $email == true && $phoneNumber == true && $diploma == true && $poleEmploiNumber == true && $numberOfBadges == true && $codecademyLink == true && $hero == true && $hack == true && $experience == true){ ?>
        <p>Merci pour votre bienveillante collaboration !</p>
        <?php }?>
    </body>
</html>

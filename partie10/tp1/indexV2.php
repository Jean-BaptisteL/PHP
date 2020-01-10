<?php
include_once 'indexCtrl.php';
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
        <?php
        if (count($formError) > 0 || !isset($_POST['addCandidate'])) {
            ?>
            <h2>Remplissez ce formulaire pour vous inscrire :</h2>
            <div class="formOrTable">
                <fieldset>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                        <div><label for="firstname">Prénom : </label></div><input type="text" name="firstname" id="firstname" placeholder="Jean-Claude" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" required/>
                        <p><?= isset($formError['firstname']) ? $formError['firstname'] : '' ?></p>
                        <div><label for="lastname">Nom : </label></div><input type="text" name="lastname" id="lastname" placeholder="Gloomy" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required/>
                        <p><?= isset($formError['lastname']) ? $formError['lastname'] : '' ?></p>
                        <div><label for="birthday">Date de naissance : </label><input type="date" name="birthday" id="birthday" required/>
                            <p><?= isset($formError['birthday']) ? $formError['birthday'] : '' ?></p>
                            <div><label for="country">Pays : </label></div><input type="text" name="country" id="country" placeholder="France" required/>
                            <p><?= isset($formError['country']) ? $formError['country'] : '' ?></p>
                            <div><label for="nationality">Nationalité : </label></div><input type="text" name="nationality" id="nationality" placeholder="française" required/>
                            <p><?= isset($formError['nationality']) ? $formError['nationality'] : '' ?></p>
                            <div><label for="address">Adresse : </label></div><input type="text" name="address" id="address" placeholder="4 rue Lamoufle 50220 Là-bas" required/>
                            <p><?= isset($formError['address']) ? $formError['address'] : '' ?></p>
                            <div><label for="email">Adresse mail : </label></div><input type="email" name="email" id="email" placeholder="truc@monmail.fr" required/>
                            <p><?= isset($formError['email']) ? $formError['email'] : '' ?></p>
                            <div><label for="phoneNumber">Numéro de tél. : </label></div><input type="tel" name="phoneNumber" id="phoneNumber" placeholder="0601010101" required/>
                            <p><?= isset($formError['phoneNumber']) ? $formError['phoneNumber'] : '' ?></p>
                            <div><label for="diploma">Niveau d'étude : </label></div><select name="diploma" id="diploma" required>
                                <option value="" disabled selected>--Sélectionnez votre niveau d'étude--</option>
                                <option value="whithout">Sans diplôme</option>
                                <option value="bac">Bac</option>
                                <option value="bac+2">Bac +2</option>
                                <option value="bac+3">Bac +3 ou plus</option>
                            </select>
                            <p><?= isset($formError['diploma']) ? $formError['diploma'] : '' ?></p>
                            <div><label for="poleEmploiNumber">Numéro Pôle Emploi : </label></div><input type="text" name="poleEmploiNumber" id="poleEmploiNumber" placeholder="1234567A" required/>
                            <p><?= isset($formError['poleEmploiNumber']) ? $formError['poleEmploiNumber'] : '' ?></p>
                            <div><label for="numberOfBadges">Nombre de badges : </label></div><input type="number" name="numberOfBadges" id="numberOfBadges" required/>
                            <p><?= isset($formError['numberOfBadges']) ? $formError['numberOfBadges'] : '' ?></p>
                            <div><label for="codecademyLink">Lien Codecademy : </label></div><input type="url" name="codecademyLink" id="codecademyLink" placeholder="https://www.codecademy.com/" required/>
                            <p><?= isset($formError['codecademyLink']) ? $formError['codecademyLink'] : '' ?></p>
                            <div><label for="hero">Si vous étiez un super héro, lequel seriez vous et pourquoi ? </label></div><textarea name="hero" id="hero" required></textarea>
                            <p><?= isset($formError['hero']) ? $formError['hero'] : '' ?></p>
                            <div><label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) :</label></div><textarea name="hack" id="hack" required></textarea>
                            <p><?= isset($formError['hack']) ? $formError['hack'] : '' ?></p>
                            <div><label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label></div><textarea name="experience" id="experience" required></textarea>
                            <p><?= isset($formError['experience']) ? $formError['experience'] : '' ?></p>
                            <input type="submit" name="addCandidate" id="addCandidate" value="Envoyer" />
                    </form>
                </fieldset>
            </div>
        <?php } else { ?>
        <div class="formOrTable">
            <table>
            <caption>Résumé :</caption>
                <tr>
                    <td>Prénom</td>
                    <td class="data" ><?= $firstname ?></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td class="data" ><?= $lastname ?></td>
                </tr>
                <tr>
                    <td>Date de naissance</td>
                    <td class="data" ><?= $birthday ?></td>
                </tr>
                <tr>
                    <td>Pays</td>
                    <td class="data" ><?= $country ?></td>
                </tr>
                <tr>
                    <td>Nationalité</td>
                    <td class="data" ><?= $nationality ?></td>
                </tr>
                <tr>
                    <td>Adresse</td>
                    <td class="data" ><?= $address ?></td>
                </tr>
                <tr>
                    <td>Adresse email</td>
                    <td class="data" ><?= $email ?></td>
                </tr>
                <tr>
                    <td>Numéro de téléphone</td>
                    <td class="data" ><?= $phoneNumber ?></td>
                </tr>
                <tr>
                    <td>Diplome</td>
                    <td class="data" ><?= $diploma ?></td>
                </tr>
                <tr>
                    <td>Numéro Pôle Emploi</td>
                    <td class="data" ><?= $poleEmploiNumber ?></td>
                </tr>
                <tr>
                    <td>Nombre de badges</td>
                    <td class="data" ><?= $numberOfBadges ?></td>
                </tr>
                <tr>
                    <td>Lien Codecademy</td>
                    <td class="data" ><?= $codecademyLink ?></td>
                </tr>
                <tr>
                    <td>Quel hero seriez-vous ?</td>
                    <td class="data" ><?= $hero ?></td>
                </tr>
                <tr>
                    <td>Votre hack</td>
                    <td class="data" ><?= $hack ?></td>
                </tr>
                <tr>
                    <td>Votre expérience</td>
                    <td class="data" ><?= $experience ?></td>
                </tr>
            </table>
        </div>
        <?php } ?>
    </body>
</html>
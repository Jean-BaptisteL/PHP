<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>TP 1</title>
    </head>
    <body>
        <h1>TP 1</h1>
        <?php
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="firstname">Prénom : </label><input type="text" name="firstname" id="firstname" placeholder="Jean-Claude" />
            <label for="lastname">Nom : </label><input type="text" name="lastname" id="lastname" placeholder="Gloomy" />
            <label for="birthday">Date de naissance : </label><input type="date" name="birthday" id="birthday" />
            <label for="country">Pays : </label><input type="text" name="country" id="country" placeholder="France" />
            <label for="nationality">Nationalité : </label><input type="text" name="nationality" id="nationality" placeholder="française" />
            <label for="address">Adresse : </label><input type="text" name="address" id="address" placeholder="4 rue Lamoufle 50220 Là-bas" />
            <label for="email">Adresse mail : </label><input type="email" name="email" id="email" placeholder="truc@monmail.fr" />
            <label for="phoneNumber">Numéro de tél. : </label><input type="tel" name="phoneNumber" id="phoneNumber" placeholder="0601010101" />
            <label for="diploma">Niveau d'étude : </label><select name="diploma" id="diploma">
                <option value="" disabled selected>--Sélectionnez votre niveau d'étude--</option>
                <option value="whithout">Sans diplôme</option>
                <option value="bac">Bac</option>
                <option value="bac+2">Bac +2</option>
                <option value="bac+3">Bac +3 ou plus</option>
            </select>
            <label for="poleEmploiNumber">Numéro Pôle Emploi : </label><input type="text" name="poleEmploiNumber" id="poleEmploiNumber" />
            <label for="numberOfBadges">Nombre de badges : </label><input type="number" name="numberOfBadges" id="numberOfBadges" />
            <label for="codecademyLink">Lien Codecademy : </label><input type="url" name="codecademyLink" id="codecademyLink" />
            <label for="hero">Si vous étiez un super héro, lequel seriez vous et pourquoi ? </label><textarea name="hero" id="hero"></textarea>
            <label for="hack">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) </label><textarea name="hack" id="hack"></textarea>
            <label for="experience">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label><textarea name="experience" id="experience"></textarea>
            <input type="submit" name="submitButton" id="submitButton" value="Envoyer" />
        </form>
    </body>
</html>

<?php
$formError = array();
$regexName = '/^[A-Z][a-zéèêàâîôùç\s-A-Z]+$/';
if (isset($_POST['addCandidate'])){
    if(!empty($_POST['firstname'])){
        if(preg_match($regexName, $_POST['firstname'])){
            $firstname = htmlspecialchars($_POST['firstname']);
        }else{
            $formError['firstname'] = 'Le prénom doit contenir des lettres majuscules et minuscules, des tirets ou des espaces.';
        }
    }else{
        $formError['firstname'] = 'Veuillez entrer votre prénom';
    }
    if(!empty($_POST['lastname'])){
        if(preg_match($regexName, $_POST['lastname'])){
            $lastname = htmlspecialchars($_POST['lastname']);
        }else{
            $formError['lastname'] = 'Le nom doit contenir des lettres majuscules et minuscules, des tirets ou des espaces.';
        }
    }else{
        $formError['lastname'] = 'Veuillez entrer votre nom';
    }
    if(!empty($_POST['birthday'])){
        if(preg_match('/^[0-9]{4}-0[1-9]|1[0-2]-[0-2][0-9]|3[0-1]$/', $_POST['birthday'])){
            $dateArray = explode('-', $_POST['birthday']);
            if(checkdate($dateArray[1], $dateArray[2], $dateArray[0]) == true){
                $birthday = htmlspecialchars($_POST['birthday']);
            } else {
                $formError['birthday'] = 'Cette date n\'existe pas.';
            }
        } else {
            $formError['birthday'] = 'Veuillez entrer une date sous ce format : aaaa-mm-jj.';
        }
    } else {
        $formError['birthday'] = 'Veuillez entrer une date.';
    }
    if(!empty($_POST['country'])){
        if(preg_match($regexName, $_POST['country'])){
            $country = htmlspecialchars($_POST['country']);
        }else{
            $formError['country'] = 'Le nom d\'un pays commence par une majuscule et ne contient que des lettres (éventuellement des tirets ou des espaces)';
        }
    }else{
        $formError['country'] = 'Veuillez entrer le nom de votre pays.';
    }
    if (!empty($_POST['nationality'])){
        if(preg_match('/^[a-zéèêàâîôùç\s-]+$/', $_POST['nationality'])){
            $nationality = htmlspecialchars($_POST['nationality']);
        }else{
            $formError['nationality'] = 'Les majuscules, les chiffres et les caractères spéciaux ne sont pas autorisés.';
        }
    }else{
        $formError['nationality'] = 'Veuillez renseigner votre nationalité.';
    }
    if (!empty($_POST['nationality'])){
        if(preg_match('/^[a-zéèêàâîôùç\s-]+$/', $_POST['nationality'])){
            $nationality = htmlspecialchars($_POST['nationality']);
        }else{
            $formError['nationality'] = 'Les majuscule et les caractères spéciaux ne sont pas autorisés.';
        }
    }else{
        $formError['nationality'] = 'Veuillez entrer votre nationalité.';
    }
    if (!empty($_POST['address'])){
        if (preg_match('/^[0-9A-Za-zéèêàâîôùç\s-\/]+$/', $_POST['address'])){
            $address = htmlspecialchars($_POST['address']);
        }else{
            $formError['address'] = 'Les caractères spéciaux ne sont pas autorisés.';
        }
    }else{
        $formError['address'] = 'Veuillez entrer votre adresse.';
    }
    if (!empty($_POST['email'])){
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = htmlspecialchars($_POST['email']);
        }else{
            $formError['email'] = 'Cette email n\'est pas valide.';
        }
    }else{
        $formError['email'] = 'Veuillez entrer votre adresse email.';
    }
    if (!empty($_POST['phoneNumber'])){
        if(preg_match('/^0[0-9][0-9]{8}$/', $_POST['phoneNumber'])){
            $phoneNumber = htmlspecialchars($_POST['phoneNumber']);
        }else{
            $formError['phoneNumber'] = 'Un numéro de téléphone valide commence par un 0 et contient 10 chiffres';
        }
    }else{
        $formError['phoneNumber'] = 'Veuillez entrer votre numéro de téléphone.';
    }
    if (!empty($_POST['diploma'])){
        if($_POST['diploma'] == 'whithout' || $_POST['diploma'] == 'bac' || $_POST['diploma'] == 'bac+2' || $_POST['diploma'] == 'bac+3'){
            $diploma = htmlspecialchars($_POST['diploma']);
        }else{
            $formError['diploma'] = 'Veuillez sélectionner une des propositions disponibles et non jouer les "hackers" à cafouiller dans le code s\'il vous plaît.';
        }
    }else{
        $formError['diploma'] = 'Veuillez sélectionner une des propositions disponibles.';
    }
    if (!empty($_POST['poleEmploiNumber'])){
        if(preg_match('/^[0-9]{7}[A-Z]$/', $_POST['poleEmploiNumber'])){
            $poleEmploiNumber = htmlspecialchars($_POST['poleEmploiNumber']);
        }else{
            $formError['poleEmploiNumber'] = 'Un numéro Pôle Emploi contient 7 chiffres suivis d\'une lettre en majuscule.';
        }
    }else{
        $formError['poleEmploiNumber'] = 'Veuillez entrer votre numéro Pôle emploi';
    }
    if (!empty($_POST['numberOfBadges'])){
        if (filter_var($_POST['numberOfBadges'], FILTER_VALIDATE_INT)){
            $numberOfBadges = htmlspecialchars($_POST['numberOfBadges']);
        }else{
            $formError['numberOfBadges'] = 'Un nombre est composé de chiffres.';
        }
    }else{
        $formError['numberOfBadges'] = 'Veuillez entrer votre nombre de badges.';
    }
    if (!empty($_POST['codecademyLink'])){
        if(filter_var($_POST['codecademyLink'], FILTER_VALIDATE_URL)){
            $codecademyLink = htmlspecialchars($_POST['codecademyLink']);
        }else{
            $formError['codecademyLink'] = 'Votre lien est invalide.';
        }
    }else{
        $formError['codecademyLink'] = 'Veuillez entrer votre lien Codecademy.';
    }
    if (!empty($_POST['hero'])){
        $hero = htmlspecialchars($_POST['hero']);
    }else{
        $formError['hero'] = 'Veuillez remplir ce champ.';
    }
    if (!empty($_POST['hack'])){
        $hack = htmlspecialchars($_POST['hack']);
    }else{
        $formError['hack'] = 'Veuillez remplir ce champ.';
    }
    if (!empty($_POST['experience'])){
        $experience = htmlspecialchars($_POST['experience']);
    }else{
        $formError['experience'] = 'Veuillez remplir ce champ.';
    }
}
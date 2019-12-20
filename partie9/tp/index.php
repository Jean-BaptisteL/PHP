<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css" />
        <title>TP calendrier</title>
    </head>
    <body>
        <h1>TP calendrier</h1>
        <?php
        $unselectedOption = 'selected';
        if(isset($_POST['year']) && isset($_POST['months']) && preg_match('/^[1-9]|1[1-2]$/', $_POST['months']) && preg_match('/^19[0-9][0-9]|20[0-9][0-9]$/', $_POST['year'])){
            $unselectedOption = '';
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="year">Année : </label>
            <select id="year" name="year">
                <option disabled <?= $unselectedOption ?>>--Choisissez une année--</option>
                <?php
                for ($year = 1960; $year <= 2050; $year++){
                    if($_POST['year'] == $year){
                    ?><option value="<?= $year ?>" selected><?= $year ?></option>
                    <?php }else{
                        ?><option value="<?= $year ?>"><?= $year ?></option>
                    <?php } ?>
                <?php }
                ?>
            </select>
            <label for="months">Mois : </label>
            <select id="months" name="months">
                <option disabled <?= $unselectedOption ?>>--Choisissez un mois--</option>
                <?php if(isset($_POST['months']) && $_POST['months'] == '1'){ ?>
                <option value="1" selected>Janvier</option>
                <?php }else{ ?>
                    <option value="1">Janvier</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '2'){ ?>
                <option value="2" selected>Février</option>
                <?php }else{ ?>
                    <option value="2">Février</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '3'){ ?>
                <option value="3" selected>Mars</option>
                <?php }else{ ?>
                    <option value="3">Mars</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '4'){ ?>
                <option value="4" selected>Avril</option>
                <?php }else{ ?>
                    <option value="4">Avril</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '5'){ ?>
                <option value="5" selected>Mai</option>
                <?php }else{ ?>
                    <option value="5">Mai</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '6'){ ?>
                <option value="6" selected>Juin</option>
                <?php }else{ ?>
                    <option value="6">Juin</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '7'){ ?>
                <option value="7" selected>Juillet</option>
                <?php }else{ ?>
                    <option value="7">Juillet</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '8'){ ?>
                <option value="8" selected>Août</option>
                <?php }else{ ?>
                    <option value="8">Août</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '9'){ ?>
                <option value="9" selected>Septembre</option>
                <?php }else{ ?>
                    <option value="9">Septembre</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '10'){ ?>
                <option value="10" selected>Octobre</option>
                <?php }else{ ?>
                    <option value="10">Octobre</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '11'){ ?>
                <option value="11" selected>Novembre</option>
                <?php }else{ ?>
                    <option value="11">Novembre</option>
                <?php }
                if(isset($_POST['months']) && $_POST['months'] == '12'){ ?>
                <option value="12" selected>Décembre</option>
                <?php }else{ ?>
                    <option value="12">Décembre</option>
                <?php } ?>
            </select>
            <input type="submit" value="Calendrier" />
        </form>
        <?php if(isset($_POST['year']) && isset($_POST['months']) && preg_match('/^[1-9]|1[1-2]$/', $_POST['months']) && preg_match('/^19[0-9][0-9]|20[0-9][0-9]$/', $_POST['year'])){
            $monthName = array('1' => 'Janvier', '2' => 'Février','3' => 'Mars', '4' => 'Avril', '5' => 'Mai', '6' => 'Juin', '7' => 'Juillet', '8' => 'Août', '9' => 'Septembre', '10' => 'Octobre', '11' => 'Novembre', '12' => 'Décembre');
        ?>
        <div class="table">
            <table>
                <caption>Calendrier de <?= $monthName[$_POST['months']] ?> <?= $_POST['year'] ?></caption>
                <thead>
                    <tr>
                        <th>Lundi</th>
                        <th>Mardi</th>
                        <th>Mercredi</th>
                        <th>Jeudi</th>
                        <th>Vendredi</th>
                        <th>Samedi</th>
                        <th>Dimanche</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php
                    //On vérifie le nom du premier jour du mois et on ajoute des cases vide pour les jours précédents de la même semaine.
                    $numberOfDays = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['year']);
                    $firstDayName = date("l", mktime(0, 0, 0, $_POST['months'], 1, $_POST['year']));
                    if ($firstDayName == 'Tuesday'){
                    ?>  <td class="empty"></td> <?php
                    }else if ($firstDayName == 'Wednesday'){
                    ?>  <td class="empty"></td>
                        <td class="empty"></td><?php
                    }else if ($firstDayName == 'Thursday'){
                    ?>  <td class="empty"></td>
                        <td class="empty"></td>
                        <td class="empty"></td><?php
                    }else if ($firstDayName == 'Friday'){
                    $numberOfEmptyCase = 4;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                            ?><td class="empty"></td> <?php
                        }
                    }else if ($firstDayName == 'Saturday'){
                    $numberOfEmptyCase = 5;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                            ?><td class="empty"></td> <?php
                        }
                    }else if ($firstDayName == 'Sunday'){
                    $numberOfEmptyCase = 6;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                            ?><td class="empty"></td><?php
                        }
                    }
                    //Pour le calendrier, une boucle ajoute des cases au tableau avec le numéro du jour et si le jour est un dimanche, on ajoute une ligne
                    for ($dayInCalendar = 1;$dayInCalendar <= $numberOfDays; $dayInCalendar++){
                        $searchSunday = date("l", mktime(0, 0, 0, $_POST['months'], $dayInCalendar, $_POST['year']));
                        if ($searchSunday == 'Sunday'){?>
                        <td><?= $dayInCalendar ?></td>
                    </tr>
                    <tr><?php
                        }else{
                      ?><td><?= $dayInCalendar ?></td><?php
                        }
                    }
                    //On regarde le nom du dernier jour du mois et on complète le tableau avec des cases vides.
                    $lastDayName = date("l", mktime(0, 0, 0, $_POST['months'], $numberOfDays, $_POST['year']));
                    if($lastDayName == 'Monday'){
                        $numberOfEmptyCase = 6;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                    ?>  <td class="empty"></td> <?php
                        }
                    }else if($lastDayName == 'Tuesday'){
                        $numberOfEmptyCase = 5;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                    ?>  <td class="empty"></td> <?php
                        }
                    }else if($lastDayName == 'Wednesday'){
                        $numberOfEmptyCase = 4;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                    ?>  <td class="empty"></td> <?php
                        }
                    }else if($lastDayName == 'Thursday'){
                        $numberOfEmptyCase = 3;
                        for($emptyCase = 1; $emptyCase <= $numberOfEmptyCase; $emptyCase++){
                    ?>  <td class="empty"></td> <?php
                        }
                    }else if($lastDayName == 'Friday'){
                    ?>  <td class="empty"></td> 
                        <td class="empty"></td><?php
                    }else if($lastDayName == 'Saturday'){
                    ?>  <td class="empty"></td> <?php
                    }
                    ?>
                    </tr>
                </tbody>
            </table>
            <?php } ?>
        </div>
    </body>
</html>
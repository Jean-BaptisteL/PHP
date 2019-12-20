<?php
  $magnitud = 5;
  switch($magnitud){
    case 1:
    default:
        $damage = 'Micro-séisme impossible à ressentir.';
    break;
    case 2:
        $damage = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
    break;
    case 3:
        $damage = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
    break;
    case 4:
        $damage = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
    break;
    case 5:
        $damage = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
    break;
    case 6:
        $damage = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
    break;
    case 7:
        $damage = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
    break;
    case 8:
        $damage = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
    break;
    case 9:
        $damage = 'Séisme capable de tout détruire sur une très vaste zone.';
    break;
  }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exo 4</title>
  </head>
  <body>
    <p><?= $damage ?></p>
  </body>
</html>

<?php
require('inc/function.php');
$title = "Homepage";
include('inc/header.php'); ?>

<h1>Home page</h1>
<?php
// créez un array contenir 10 defauts
$defaults = array('avare', 'paresseux', 'borné', 'cruel', 'distrait', 'mediocre', 'ringard', 'ennuyant', 'stupide', 'superficiel');
// créez un array qui contient des plats typiques français
$plats = array('Cuisses de grenouille', 'tartiflette', 'blanquette', 'quiche lorraine', 'creme brulé', 'Salé aux lentilles', 'galette', 'raclette', 'Mousse au chocolat', 'Bourguignon frite');
$color = array('red', 'blue');
// créer un fonction "generateGroupName" permettant d'afficher une combinaison d'un plat au hasard avec un default au hasard
// "Tartiflette frustrée"
// affichage dans une div, texte devra être rose, tous les mots devront commencer par une majuscule


// Comementaire
// creation d'une fonction qui prend deux parameters (les deux tableaux)
function generateGroupName($tab1, $tab2,$balise='div',$color='pink')
{
    
    // allez chercher un element au hasard dans le $tab1
    $items1 = $tab1[array_rand($tab1)];
    // allez chercher un element au hasard dans le $tab2
    $items2 = $tab2[array_rand($tab2)];
    // concatenate nos deux résultats
    $allitems = $items1 . ' ' . $items2;
    // mettre des majuscules à tous les mots
    $UpAllitems = ucwords($allitems);
    // return une div avec la phrase => color:pink;
    return '<'.$balise.' style="background:'.$color.'">' . $UpAllitems . '</'.$balise.'>';
}


echo generateGroupName($plats, $defaults,'h3','pink');
echo generateGroupName($plats, $color,'div','#0f0');

?>


<?php


include('inc/footer.php');

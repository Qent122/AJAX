<?php
include '../function/function.php';


// debug($GLOBALS);

// Verifie qui existe et pas vide
function Verifie($data)
{


    if (!empty($data['nom']) && !empty($data['prenom']) && !empty($data['age'])) {
        echo "<p class='infos'>Je m'appelle " . $data['nom'] . " " . $data['prenom'] . " et j'ai " . $data['age'] . " ans.</p>";
    } elseif (!empty($data['fruit']) && !empty($data['music'])) {
        echo '<p>J\'aime la ' . $data['fruit'] . ' et faire de la ' . $data['music'] . '.</p>';
    } else {
        echo 'erreur';
    }
}

// Verifie($_GET);
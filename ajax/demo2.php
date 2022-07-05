<?php
include '../function/function.php';


debug($_GET);

// Verifie qui existe et pas vide
function Verifie($data)
{


    if (!empty($data['nom'] && $data['prenom'] && $data['age'])) {
        echo "Je m'appelle " . $data['nom'] . " " . $data['prenom'] . " et j'ai " . $data['age'] . " ans.";
    } else {
        echo 'erreur';
    }
}

Verifie($_GET);

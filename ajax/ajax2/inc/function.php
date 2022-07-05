<?php

function debug($X)
{
    echo '<pre style="height:200px;overflow-y: scroll;font-size:.5rem;padding: .6rem; font-family: Consolas, Monospace;background-color: #000;color:#fff;">';
    print_r($X);
    echo '</pre>';
}

function validText($er, $data, $key, $min, $max)
{
    if (!empty($data)) {
        if (mb_strlen($data) < $min) {
            $er[$key] = 'min ' . $min . ' caractères';
        } elseif (mb_strlen($data) >= $max) {
            $er[$key] = 'max ' . $max . ' caractères';
        }
    } else {
        $er[$key] = 'Veuillez renseigner ce champ';
    }
    return $er;
}

function validEmail($er, $data, $key)
{
    if (!empty($data)) {
        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            $er[$key] = 'Veuillez renseigner un email valide';
        }
    } else {
        $er[$key] = 'Veuillez renseigner un email';
    }
    return $er;
}

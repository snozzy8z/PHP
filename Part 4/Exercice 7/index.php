<?php

$age = (int)18;
$gender = "homme";

function test($age, $gender){
    if ($age >= 18 && $gender == "homme"){
        return 'Vous êtes un' . ' ' . $gender . ' ' . 'et vous êtes majeur';
    }else if ($age <= 18 && $gender == "homme") {
        return 'Vous êtes un' . ' ' . $gender . ' ' . 'et vous êtes mineur';
    }else if ($age >= 18 && $gender == "femme") {
        return 'Vous êtes une' . ' ' . $gender . ' ' . 'et vous êtes majeure';
    }else {
        return 'Vous êtes une' . ' ' . $gender . ' ' . 'et vous êtes mineure';
    }
}

echo test($age, $gender);
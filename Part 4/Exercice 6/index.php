<?php

$nom = 'Dave';
$prenom = 'Loper';
$age = (int)25;

function test($nom, $prenom, $age){
    return "Bonjour". ' ' . $nom . ' ' . $prenom . ', tu as' . ' ' . $age . 'ans.';
}

echo test($nom, $prenom, $age);
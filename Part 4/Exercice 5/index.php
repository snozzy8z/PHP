<?php
$nbr = 10;
$var_a = "Le php c'est la vie woula";

function test($nbr, $var_a){
    return $nbr . ' ' . $var_a;
}

echo test($nbr, $var_a);
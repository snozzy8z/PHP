<?php
$nbr1 = 60;
$nbr2 = 40;

function test($nbr1, $nbr2)
{
    switch (true) {
        case $nbr1 < $nbr2:
            return $nbr1 . ' ' . "est plus petit";
            break;

        case $nbr1 > $nbr2:
            return $nbr1 . ' ' . "est plus grand";
            break;

        case $nbr1 == $nbr2:
            return $nbr1 . ' ' . $nbr2 . ' ' . "les deux nombres sont identiques";
            break;
        }
    }
    // if ($nbr1 > $nbr2){
    //     return $nbr1. ' ' . "est plus grand";
    // }else if ($nbr1 < $nbr2) {
    //     return $nbr1. ' ' . "est plus petit";
    // }else {
    //     return $nbr1. ' ' . $nbr2 . ' ' . "les deux nombres sont identiques";
    // }


echo test($nbr1, $nbr2);

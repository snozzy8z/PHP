<?php
$var_a = "Faire une fonction qui prend en paramètre deux chaines";
$var_b = " de caractères et qui revoit la concaténation de ces deux chaines.";

function test($i, $j){
    return $i. ' ' . $j;
}

echo test($var_a, $var_b);
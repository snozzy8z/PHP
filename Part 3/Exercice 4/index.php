<?php
$var_a = 1 ;

while($var_a <= 10) {
    echo $var_a . ' ';
    echo $var_a / 2;
    $var_a += $var_a / 2;
    $var_a++;
}
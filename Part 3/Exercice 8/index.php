<?php
for ($nbr = 1; $nbr <= 100; $nbr++) {

    $est_divisible_par = 3;

    if ($nbr % $est_divisible_par != 0) {
        echo $nbr . ' n\'est pas un muliple de  ' . $est_divisible_par . '<br>';
    } 
}

<?php
$var_a = rand(0, 30);

echo $var_a. ' ' . '<br>';

for ($nbr = 1, $nbr <= 100; $nbr != $var_a +1 ; $nbr++){
    echo $nbr. ' ' ;
}
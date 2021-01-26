<?php
$var_a = rand(0, 30);

echo $var_a. ' ' . '<br>';

for ($nbr = 1; $nbr <= 100; $nbr++){
    if ( $nbr != $var_a){
        echo '<p>'. $nbr . '</p>';
    }
}
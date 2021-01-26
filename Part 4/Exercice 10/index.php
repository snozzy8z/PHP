<?php
$nbr = 5;

function test($nbr1){
    if ($nbr1 === 0){
        return 1;
    }
    return $nbr1 * test($nbr1-1);
}

echo test($nbr);
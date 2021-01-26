<?php


function test(...$nbr){
    $res = 0;
    foreach ($nbr as $l){
        $res += $l; 
    };
    return $res; 
}

echo test(1, 2, 3, 50);
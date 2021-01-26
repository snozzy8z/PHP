<?php
$var_a = 100;
$var_b = rand(1, 100);

while ($var_a >= 10) {
    $var_res = $var_a * $var_b;
    echo $var_res . ' ';
    $var_a--;
}
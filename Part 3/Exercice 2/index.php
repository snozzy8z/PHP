<?php
$var_a = 0;
$var_b = rand(1, 100);

while ($var_a <= 20) {
    $var_res = $var_a * $var_b;
    echo $var_res . ' ';
    $var_a++;
}

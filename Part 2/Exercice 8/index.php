<?php 
$number = 140;

if ($number % 5 == 0 && $number % 3 ==0){
    echo 'FizzBuzz';
}else if ($number % 3 == 0){
    echo 'Fizz';
}else if ( $number % 5 == 0 ){
    echo 'Buzz :' . ' ' . $number;
}

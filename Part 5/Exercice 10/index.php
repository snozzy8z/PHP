<?php

$dep = ['02' => 'Aisne', 59 => 'Nord', 60 => 'Oise',  62 => 'Pas-de-Calais', 80 => 'Somme'];


foreach ($dep as $key => $value){
    echo '<p>'.'Le département '. ' ' . $value . ' ' . 'a le numéro '. ' ' . $key . ' ' . '</p>';
}
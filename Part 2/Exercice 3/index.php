<?php
$age = 18;
$gender = 'Femme' ;

if ($age >= 18 && $gender == "Homme") {
    echo "Vous êtes un homme et vous êtes majeur";
}else if ($age >= 18 && $gender === "Femme"){
   echo "Vous êtes une femme et vous êtes majeure";
}else if($age <= 18 && $gender === "Homme"){
    echo "Vous êtes un homme et vous êtes mineur";
}else if ($age <= 18 && $gender === "Femme"){
    echo "Vous êtes une femme et vous êtes mineur ";
}
?>
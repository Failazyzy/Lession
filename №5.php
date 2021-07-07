//Урок №2 задание 7

<?php

function sklon($num,$period){

    $numret = $num;
    $hour = array("час","часа","часов");
    $min = array("минуту","минуты","минут");
    if ($period=='hour') $titles = $hour;
    if ($period=='min') $titles = $min;
    $cases = array (2, 0, 1, 1, 1, 2);
    return $numret." ".$titles[ ($num%100>4 && $num%100<20)? 2 : $cases[min($num%10, 5)] ];
}
$hour = date("G");
$min = date("i");
echo sklon($hour,"hour");
echo sklon($min,"min"); 
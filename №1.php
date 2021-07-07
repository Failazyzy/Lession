
//Урок №2 задание 1

<?php
$a = rand(-9,9);
$b = rand(-9,9);


if($a>=0 && $b>=0){
    echo $a - $b;
}
elseif($a<0 && $b<0){
    echo $a * $b;
}
elseif($a>0 && $b<0 || $a<0 && $b>0){
    echo $a + $b;
}
?>
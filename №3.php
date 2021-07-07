//Урок №2 задание 3, 4
<?php

function summ($a,$b){
    return $a + $b;
}
function minus($a,$b){
    return $a - $b;
}
function multiply($a,$b){
    return $a * $b;
}
function division($a,$b){
    return $a / $b;
}

echo "Первое число", $arg1 = rand(-10,10), "<br>";
echo "Второе число", $arg2 = rand(-10,10), "<br>";

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "summ":
            $result = summ($arg1, $arg2);
            break;
        case "minus":
            $result = minus($arg1, $arg2);
            break;
        case "multiply":
            $result = multiply($arg1, $arg2);
            break;
        case "division":
            $result = division($arg1, $arg2);
            break;    
    }
    return $result;
}
$arrOperation = ['summ','minus','multiply','division'];
foreach ($arrOperation as $operation) {
    echo mathOperation($arg1,$arg2,$operation);
}
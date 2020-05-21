//Урок №2 задание 2
<?php
$a = rand(0,15);

switch ($a){
    case 0:
        echo "0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 1:
        echo "1 2 3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 2:
        echo "2 3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 3:
        echo "3 4 5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 4:
        echo "4 5 6 7 8 9 10 11 12 13 14 15";
        break; 
    case 5:
        echo "5 6 7 8 9 10 11 12 13 14 15";
        break;
    case 6:
        echo "6 7 8 9 10 11 12 13 14 15";
        break;
    case 7:
        echo "7 8 9 10 11 12 13 14 15";
        break;
    case 8:
        echo "8 9 10 11 12 13 14 15";
        break;
    case 9:
        echo "9 10 11 12 13 14 15";
        break;
    case 10:
        echo "10 11 12 13 14 15";
        break;
    case 11:
        echo "11 12 13 14 15";
        break;
    case 12:
        echo "12 13 14 15";
        break;
    case 13:
        echo "13 14 15";
        break;
    case 14:
        echo "14 15";
        break;
    case 15:
        echo "15";
        break;   

    }
?>
<br>
<?php
$a = rand(0,15);

switch ($a){
    case 0:
        echo implode(" ", range(0, 15));
        break;
    case 1:
        echo implode(" ", range(1, 15));
        break;
    case 2:
        echo implode(" ", range(2, 15));
        break;
    case 3:
        echo implode(" ", range(3, 15));
        break;
    case 4:
        echo implode(" ", range(4, 15));
        break;
    case 5:
        echo implode(" ", range(5, 15));
        break;
    case 6:
        echo implode(" ", range(6, 15));
        break;
    case 7:
        echo implode(" ", range(7, 15));
        break;
    case 8:
        echo implode(" ", range(8, 15));
        break;
    case 9:
        echo implode(" ", range(9, 15));
        break;
    case 10:
        echo implode(" ", range(10, 15));
        break;
    case 11:
        echo implode(" ", range(11, 15));
        break;
    case 12:
        echo implode(" ", range(12, 15));
        break;
    case 13:
        echo implode(" ", range(13, 15));
        break;
    case 14:
        echo implode(" ", range(14, 15));
        break;
    case 15:
        echo implode(" ", range(15, 15));
        break;
    
}
?>


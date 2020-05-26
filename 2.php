
<?php

$a = 10;
$b = 0;
function num($b) {
  if ($b == 0) {
    return "$b" . ' - ноль<br />';
  }
  if ($b % 2) {
    return "$b" . ' - нечетное число<br />';
  } else {
    return "$b" . ' - четное число<br />';
  }
}
 
do {
  echo num($b);
  $b++;
} while ($b <= $a); 
?>






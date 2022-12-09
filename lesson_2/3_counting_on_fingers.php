<?php
$number=null;
$finger = null;

while ($number <=0  ) {
    $number = (int)readline("Введите число (больше 0): ");
}

$remainder = $number%8;
if ($remainder >= 1 && $remainder <= 5) {
    $finger = $remainder;
}
if ($remainder === 6) {
    $finger = 4;
}
if ($remainder === 7) {
    $finger = 3;
}
if ($remainder === 8) {
    $finger = 2;
}
echo $finger;


<?php
$num = 1234;
$sum = 0;

while ($num > 0) {
    $digit = $num % 10;
    $sum = $sum + $digit;
    $num = (int)($num / 10);
}

echo "Sum of digits = " . $sum;
?>
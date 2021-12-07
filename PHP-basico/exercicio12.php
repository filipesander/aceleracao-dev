<?php 

$number = [1, 7, 13, 99, 17, 24, 33, 30, 93, 71, 10, 111, 79, 43, 57, 21, 14, 9, 32 ];

$sum = array_sum($number);

$size = count($number, COUNT_NORMAL);

$calcAvg = $sum / $size;

echo "A média calculada foi " . $calcAvg;
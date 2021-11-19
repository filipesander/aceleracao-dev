<?php 

$array1 = [7, 5, 26, 31, 99, 73, 8, 79, 6, 3, 21, 4, 5, 6, 3, 2, 41, 2, 15, 2];
$array2 = [-2, -67, -3, -2, -93, -4, -77, -8, -59, -6, -25, -21, -1, -4, -2, -5, -1, -2, -5, -4];

function sum($a, $b) {
    if ($a + $b < 0) return 0;
    return $a + $b;
}

$results = [];
for ($i=0; $i < 20; $i++) { 
    $results[$i] = sum($array1[$i], $array2[$i]);
}

$files = fopen("arrays.txt", "w+");
for ($i=0; $i < 20; $i++) { 
    fwrite($files, $array1[$i] . " + " . $array2[$i] . " = " . $results[$i] . PHP_EOL);
}
fclose($files);

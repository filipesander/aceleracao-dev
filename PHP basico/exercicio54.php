<?php 

function parOuImpar($n)
{
    if (!$n % 2 == 0) {
      throw new Exception("Número não válido para essa operacao", 535);
    }

    return true;
}

$numbers = [2,3,5,2,25,2,2,6,5,6,54,4,1,8,77];

var_dump($numbers);
echo '<br>';
echo '<br>';

try {
    foreach ($numbers as $number) {
        parOuImpar($number);
    }
} catch (Exception $e) {
    echo "Error: {$e->getMessage()}, Codigo: {$e->getCode()}";
}
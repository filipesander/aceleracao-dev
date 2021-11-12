<?php 

function sumValues($val1, $val2)
{
  echo $val1 + $val2 . "<br>";
}

function verifyPair($num)
{
  if($num % 2 == 0){
    echo 'É par' . "<br>";
  }else{
    echo 'É impar' . "<br>";
  }
}

function countString($str){
  echo 'Sua string tem ' . strlen($str) . ' caracteres';
}

sumValues(3, 4);

verifyPair(3);

countString('Filipe');

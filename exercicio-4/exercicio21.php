<?php 

$name = 'Filipe';
$empty = null;
$profession = 'Dev';
$language = 'Php';
$likes = ['Coffee', 'Water', 'Chocolate'];

function verifyNull($var)
{
  if(is_null($var)){
    echo "Essa variável é nula";
  }
}

function verifyArray($arr)
{
  if(is_array($arr)){
    var_export($arr);
  }
}

verifyNull($empty);

echo "<br>";

verifyArray($likes);
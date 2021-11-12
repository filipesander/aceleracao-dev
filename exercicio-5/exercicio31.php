<?php 

$store = file_get_contents("https://rickandmortyapi.com/api");

$transformArray = json_decode($store);

function verifyEmpty()
{
  if(empty($transformArray)){
    echo "Você não pode continuar";
  }
}

function verifyArray($array)
{
  if(is_array($array)){
    var_dump($array);
  }
}

verifyEmpty();

verifyArray($transformArray);
<?php 

$curso = ["PHP","Java","Python"];

$pessoa = ["Joao","Pedro","Clara"];

$loja = ["Centro","Zona Sul","Zona Oeste"];

foreach($curso as $cursos){
  echo '<pre>';
  print_r($cursos);
  echo '</pre>';
}

echo "--------------------";

foreach($pessoa as $pessoas){
  echo '<pre>';
  print_r($pessoas);
  echo '</pre>';
}

echo "--------------------";

foreach($loja as $lojas){
  echo '<pre>';
  print_r($lojas);
  echo '</pre>';
}
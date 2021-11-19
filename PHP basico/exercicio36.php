<?php 

$n = 6;

$fatorial = 1;

$contador = 1;

for($i = $contador; $i <= $n; $i++){
  $fatorial *= $contador;
  $contador++;
}

print $fatorial;



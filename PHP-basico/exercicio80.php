<?php

$estoque = [];

$estoque[1] = new DVD(1,29.99,'titulo dvd 1', '2021');
$estoque[2] = new DVD(2,29.99,'titulo dvd 2', '2021');
$estoque[3] = new DVD(3,29.99,'titulo dvd 3', '2021');
$estoque[4] = new DVD(4,29.99,'titulo dvd 4', '2021');

$estoque[5] = new Leite(5, 5.99, 'marca de leite 5', 1.5, new DateTime('now'));
$estoque[6] = new Leite(6, 5.99, 'marca de leite 6', 1.5, new DateTime('now'));
$estoque[7] = new Leite(7, 5.99, 'marca de leite 7', 1.5, new DateTime('now'));
$estoque[8] = new Leite(8, 5.99, 'marca de leite 8', 1.5, new DateTime('now'));
$estoque[9] = new Leite(9, 5.99, 'marca de leite 9', 1.5, new DateTime('now'));

foreach ($estoque as $key => $produto) {
  if ($produto instanceof Leite) {
      if ($produto->estaVencido()) echo "Leite {$key} está vencido<br>";
      else echo "Leite {$key} não está vencido<br>";
  } else if ($produto instanceof DVD) {
      $ano = $produto->getAno();
      echo "Ano do DVD {$key} = {$ano}<br>";
  }
  
}

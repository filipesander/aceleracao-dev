<?php 

include_once 'cardapioFuncoes.php';

$salgados = ['Coxinha', 'Enroladinho', 'Pastel', 'Disco'];
$acompanhamentos = ['Batata frita', 'Azeitona', 'Palmito'];
$refrigerantes = ['Coca-cola', 'Pepsi', 'Fanta Laranja', 'Fanta Uva', 'Guarana'];

verifyMin($salgados);

verifyMax($salgados);

foreach ($salgados as $salgado ) {
  echo $salgado . "<br>";
}
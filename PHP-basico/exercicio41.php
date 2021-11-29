<?php 

$myFile = fopen('paises.txt', 'w') or die ('Arquivo não criado');

$data = file_get_contents('https://servicodados.ibge.gov.br/api/v1/localidades/paises');

fwrite($myFile, $data);

fclose($myFile);

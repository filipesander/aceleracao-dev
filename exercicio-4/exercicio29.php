<?php 

$region = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/mesorregioes");

$transformArray = json_decode($region);

var_export($transformArray);

echo '<pre>';
print_r($region);
echo '</pre>';
<?php 

//ERROR: failed to open stream: HTTP request failed! HTTP/1.1
$states = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/distritos
");

echo '<pre>';
print_r($states);
echo '</pre>';
die;

$transformStdClass = json_encode(json_decode($states), true);

var_export($transformStdClass);
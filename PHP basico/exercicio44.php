<?php 

$ceps = [];


function curl($url)
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ));

  $response = curl_exec($curl);

  curl_close($curl);
  return json_decode($response, true);
}


$ceps[] = curl('https://viacep.com.br/ws/74013010/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030010/json/');
$ceps[] = curl('https://viacep.com.br/ws/74015170/json/');
$ceps[] = curl('https://viacep.com.br/ws/74015902/json/');
$ceps[] = curl('https://viacep.com.br/ws/74015040/json/');
$ceps[] = curl('https://viacep.com.br/ws/74015030/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030050/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030030/json/');
$ceps[] = curl('https://viacep.com.br/ws/74015020/json/');
$ceps[] = curl('https://viacep.com.br/ws/74023040/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030040/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030090/json/');
$ceps[] = curl('https://viacep.com.br/ws/74020170/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030070/json/');
$ceps[] = curl('https://viacep.com.br/ws/74030080/json/');


$ceps = json_encode($ceps);

$arquivo = fopen("ceps.txt", 'w');
fwrite($arquivo, $ceps);
fclose($arquivo);


<?php 

$myFile = fopen('cartao.txt', 'w+') or die ('Arquivo não criado');

$content = json_decode(file_get_contents('https://random-data-api.com/api/business_credit_card/random_card)'), true);

fwrite($myFile, $content);

fclose($myFile);

$transformJsonAgain = json_encode($content);

fwrite($myFile, $transformJsonAgain);

var_export($myFile);


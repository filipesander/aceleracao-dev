<?php 

$temp1 = 77.3;

$temp2 = 19.7;

function ConvertFahrenheitCelsius($temp){
  return ($temp-32)*5/9;
}

echo "Temperatura em Celsius $temp1 e temperatura em Fahrenheit " . ConvertFahrenheitCelsius($temp1);



<?php 

function divisionNumbers($number1, $number2)
{
  if($number1  === 0){
    throw new Exception("não é possivel fazer divisão por 0", 523);
  }
  if($number2  === 0){
    throw new Exception("não é possivel fazer divisão por 0", 523);
  }
  return $number1 / $number2;
}

 echo divisionNumbers(5,0);
<?php 


$n1 = [
  "Tiago" => 3,
  "Joao" => 7,
  "Pedro" => 9,
  "Andre" => 7,
];

$n2 = [
  "Paulo" => 9,
  "FIlipe" => 3,
  "David" => 7,
  "Jose" => 8,
];

function studentApproved($n1, $n2){
  $return = false;
  if(($n1>7)&&($n2>7)){
      if($n1+$n2 > 14){
          $return = true;
      }
  }
  return $return;
}

foreach($n1 as $key => $value){
  if(studentApproved($n1[$key], $n2[$key])){
      $file = fopen("alunos-aprovados.txt", "a");
      fwrite($file, $key."\n");
      fclose($file);
  }
}
 
fclose($file);
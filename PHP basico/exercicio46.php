<?php 

$clients = [
  "Joaquim" => "28,m", 
  "Maria" => "41,f", 
  "Pedro" => "18,m",
  "Joana Silva" => "58,f",
  "João Lopes" => "21,m",
  "Joana" => "15,f", 
  "Fernanda" => "25,f"
];

$man = [];

$woman = [];

foreach($clients as $key => $value){
  $year = explode(',', $value)[0];
  $genre = explode(',', $value)[1];

  if($genre == 'm'){
    $man[$key] = $year;
  }else{
    $woman[$key] = $year;
  }
}

echo "<pre>";
print("Man: ");
print_r($man);
print("Woman: ");
print_r($woman);
echo "</pre>";

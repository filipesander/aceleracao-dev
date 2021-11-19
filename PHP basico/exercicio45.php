<?php 

$namePeoples = ['Filipe', 'Emanuel', 'Camila', 'Angelina', 'Pedro', 'Tomé', 'Mateus', 'Tiago', 'Bartolomeu', 'Natanael', 'Andre', 'João', 'Paulo', 'Lebeu', 'Jose'] ;

foreach($namePeoples as $namePeople){

  if(!file_exists($namePeople)){

    mkdir($namePeople, 0777, true);
    $myFile = fopen($namePeople . DIRECTORY_SEPARATOR . 'nome_candidato.txt', 'w');

    fwrite($myFile, $namePeople);

    fclose($myFile);
  }else{
    echo "Diretório já existente";
  }

}


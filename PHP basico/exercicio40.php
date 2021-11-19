<?php 

$myFile = fopen("dados.txt", "w") or die("Arquivo não criado");
$txt = 0;

for ($i = $txt; $i <=700; $i++) {
  if ($i % 2 == 0) {
    fwrite($myFile, $i . PHP_EOL);
  }
}

fclose($myFile);
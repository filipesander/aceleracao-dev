<?php 

$scanArray = scandir("img");

array_splice($scanArray, 0, 2);


foreach ($scanArray as $imageName) {
  print_r(pathinfo('./' . $imageName));
}
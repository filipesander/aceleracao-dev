<?php 

require_once'exercicio32.php';

function verifyMin($param)
{
  if (count($param) < 3  ) {
    echo "A categoria salgados não obedece a quantidade mínima de itens, cadastre mais itens";
    die;
  }
}

function verifyMax($param)
{
  if(count($param) > 6 ){
    echo "Muitos items cadastrados";
    die;
  }
}






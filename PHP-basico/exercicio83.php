<?php 

class Company{

  public function createSoftware()
  {
    echo "Criar Software";
  }

}

class Designer extends Company{

  public function designArchitecture()
  {
    echo "Desenhar o projeto <br>";
  }

}

class Programmer extends Company{

  public function writeCode()
  {
    echo "Escrever código limpo! <br>";
  }

}

class Tester extends Company{


  public function testSoftware()
  {
    echo "Testar o software <br>";
  }

}



$d = new Designer;
$d->designArchitecture();

$p = new Programmer;
$p->writeCode();

$t = new Tester;
$t->testSoftware();



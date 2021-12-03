<?php 
interface Arma {
  public function usarArma();
}

abstract class Personagem {
  private Arma $arma;

  public function lutar()
  {
    // code...
  }

  public function atribuiArma(Arma $arma) {
      $this->arma = $arma;
  }
}

class Machado implements Arma {
  public function usarArma()
  {
    // code...
  }
}

class ArcoeFlecha implements Arma {
  public function usarArma()
  {
    // code...
  }
}

class Espada implements Arma {
  public function usarArma()
  {
    // code...
  }
}

class Faca implements Arma {
  public function usarArma()
  {
    // code...
  }
}

class Rei extends Personagem
{
  // code...
}

class Rainha extends Personagem
{
  // code...
}

class Duende extends Personagem
{
  // code...
}

class Guerreiro extends Personagem
{
  // code...
}

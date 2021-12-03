<?php 

interface AnimalOrcamento extends Animal {
  public function orcamentoGastosAnimal(array $animais): ItemOrcamentoComplexo;
}

class Cachorro implements AnimalOrcamento{
  private string $nomeEspecie;
  private string $nomeAnimal;

  public function __construct(string $nomeEspecie, string $nomeAnimal)
  {
      $this->nomeEspecie = $nomeEspecie;
      $this->nomeAnimal = $nomeAnimal;
  }

  function getNomeEspecie() {
      return $this->nomeEspecie;
  }

  function getNomeAnimal()
  {
      return $this->nomeAnimal;
  }

  public function orcamentoGastosAnimal(array $animais): ItemOrcamentoComplexo {
      foreach ($animais as $animal) {
          if ($animal instanceof ItemOrcamentoComplexo) {
              if ($animal->getHistorico() === 'vacina W') {
                  return $animal;
              }
          }
      }
  }
}
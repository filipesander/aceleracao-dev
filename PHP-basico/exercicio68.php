<?php 

interface Animal {
  public function getNomeEspecie();
  public function getNomeAnimal();
}

interface Ferramentas {
  public function filtrarEspecie(array $completo, string $especieFiltrar);
  public function classificarEspecie(array $completo);
}

class Leao implements Animal {
  private  $nomeEspecie;
  private  $nomeAnimal;

  public function __construct( $nomeEspecie,  $nomeAnimal)
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
}

class Ferramenta implements Ferramentas {

  public function filtrarEspecie(array $completo, string $especieFiltrar)
  {
      $completoFiltrado = [];
      foreach ($completo as $key => $animal) {
          if ($animal instanceof Animal) {
              if ($animal->getNomeEspecie() === $especieFiltrar) {
                  $completoFiltrado[] = $animal;
              }
          }
      }
      return $completoFiltrado;
  }

  public function classificarEspecie(array $completo)
  {
      $especies = [];
      foreach ($completo as $key => $animal) {
          if ($animal instanceof Animal) {
              if (!in_array($animal->getNomeEspecie(), $especies)) {
                  array_push($especies, $animal->getNomeEspecie());
              }
          }
      }

      return $especies;
  }
}

class Resultado {
  private string $nomeEspecie;
  private int $quantidade;

  function getNomeEspecie() {
      return $this->nomeEspecie;
  }

  function getQuantidade() {
      return $this->quantidade;
  }
}

$leao1 = new Leao('Leao Selvagem', 'Rei Leão');
$leao2 = new Leao('Leao Zoologico', 'Alex o Leao');

$arrayDeAnimais = [$leao1, $leao2, $leao1, $leao2];

echo '<pre>';
print_r($arrayDeAnimais);
echo '</pre>';

$ferramenta = New Ferramenta();

$especies = $ferramenta->classificarEspecie($arrayDeAnimais);

echo '<pre>';
print_r($especies);
echo '</pre>';

$leaoSelvagem = $ferramenta->filtrarEspecie($arrayDeAnimais, 'Leao Selvagem');

echo '<pre>';
print_r($leaoSelvagem);
echo '</pre>';

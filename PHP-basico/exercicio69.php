<?php 

class ItemOrcamento {
  private $historico;
  private $valor;

  public function __construct($historico, $valor) {

      $this->historico = $historico;
      $this->valor = $valor;
  }

  public function getHistorico() {
      return $this->historico;
  }

  public function getValor() {
      return $this->valor;
  }
}

class ItemOrcamentoComplexo extends ItemOrcamento {
  private $orcamentos;

  public function __construct($historico, $valor, $orcamentos) {
      parent::__construct($historico, $valor);
      $this->orcamentos = $orcamentos;
      $this->orcamentos[] = $this;
  }

  public function getValor() {
      $somatorio = 0;
      foreach ($this->orcamentos as $orcamento) {
          $somatorio += $orcamento->getValor();
      }
      return $somatorio;
  }

  public function encontrarItem($historicoSubitem) {
      foreach ($this->orcamentos as $orcamento) {
          if ($orcamento->getHistorico() === $historicoSubitem) {
              return $orcamento;
          }
      }
      return null;
  }
}
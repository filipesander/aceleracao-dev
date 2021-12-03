<?php

require_once 'exercicio66.php';

class Empregado extends Pessoa{
    private $id;
    private $funcao;
    private $horarioDeEntrada;
    private $horarioDeSaida;
    private $salario;
    private $horasExtras;

    public function __construct(
      $nome,
      $cpf,
      $endereco,
      $nomepai,
      $nomemae,
      $rg,
      $serialdeidentificacao,
      $id,
      $funcao,
      $horarioDeEntrada,
      $horarioDeSaida,
      $salario,
      $horasExtras)
    {
        parent::__construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao);
        $this->id = $id;
        $this->funcao = $funcao;
        $this->horarioDeEntrada = $horarioDeEntrada;
        $this->horarioDeSaida = $horarioDeSaida;
        $this->salario = $salario;
        $this->horasExtras = $horasExtras;
    }

    public function getId() {
        return $this->id;
    }
    public function getFuncao() {
        return $this->funcao;
    }
    public function gethorarioDeEntrada() {
        return $this->horarioDeEntrada;
    }
    public function getHorarioDeSaida() {
        return $this->horarioDeSaida;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function getHorasExtras() {
        return $this->horasExtras;
    }

    public function __toString()
    {
        return json_encode(array(
            "nome" => parent::getNome(),
            "cpf" => parent::getCpf(),
            "endereco" => parent::getEndereco(),
            "nomepai" => parent::getNomePai(),
            "nomemae" => parent::getNomeMae(),
            "rg" => parent::getRg(),
            "serialdeidentificacao" => parent::getSerialDeIdentificacao(),
            "id" => $this->id,
            "funcao" => $this->funcao,
            "horarioDeEntrada" => $this->horarioDeEntrada,
            "horarioDeSaida" => $this->horarioDeSaida,
            "salario" => $this->salario,
            "horasextras" => $this->horasExtras
        ));
    }

}

$emp1 = new Empregado("Filipe",  '33333333333', 'Rua C-192B ', 'Alec', 'Auri', '003', '001', 1, 'dev', '08:30', '18:00', 2000, 0);
$emp2 = new Empregado("Joao",  '77777777777', 'Av Emanuel ', 'Joao Pai', 'Liliane', '002', '002', 2, 'engenheiro', '08:30', '18:00', 5000, 1);
$emp3 = new Empregado("Mateus",  '99999999999', 'Av Joao Bosque ', 'Tiago', 'Angelina', '004', '005', 3, 'analista', '07:00', '17:00', 7000, 5);

var_dump($emp1);
var_dump($emp2);
var_dump($emp3);

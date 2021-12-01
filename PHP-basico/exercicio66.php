<?php

class Pessoa {
    private $nome;
    private $cpf;
    private $endereco;
    private $nomepai;
    private $nomemae;
    private $rg;
    private $serialdeidentificacao;

    public function __construct($nome, $cpf, $endereco, $nomepai, $nomemae, $rg, $serialdeidentificacao)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
        $this->nomepai = $nomepai;
        $this->nomemae = $nomemae;
        $this->rg = $rg;
        $this->serialdeidentificacao = $serialdeidentificacao;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getNomePai() {
        return $this->nomepai;
    }

    public function getNomeMae() {
        return $this->nomemae;
    }

    public function getRg() {
        return $this->rg;
    }

    public function getSerialDeIdentificacao() {
        return $this->serialdeidentificacao;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function __toString()
    {
        return json_encode([
            "nome" => $this->nome,
            "cpf" => $this->cpf,
            "endereco" => $this->endereco,
            "nomepai" => $this->nomepai,
            "nomemae" => $this->nomemae,
            "rg" => $this->rg,
            "serialdeidentificacao" => $this->serialdeidentificacao
        ]);
    }

}

$p1 = new Pessoa("Joaozin", '99999999999', 'Av Emanuel', 'Davi', 'Maria', '1.000.333', '001');
$p2 = new Pessoa("Adriano", '33333333333', 'Rua Videira', 'Jose', 'Ester', '1.777.333', '002');


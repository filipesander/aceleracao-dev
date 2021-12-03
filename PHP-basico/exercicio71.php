<?php 

class Correntista
{
    private string $cpfCliente;
    private float $saldo;

    public function __construct( $cpfCliente, float $saldo)
    {
        $this->cpfCliente = $cpfCliente;
        $this->saldo = $saldo;
    }

    public function getCPFCliente()
    {
        return $this->cpfCliente;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    public function setSaldo(float $saldo)
    {
        $this->saldo = $saldo;
    }
}

interface MovimentoConta
{
    public function getCPFCorrentista(): string;
    public function getValorMovimento(): float;
}

interface OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista;
}
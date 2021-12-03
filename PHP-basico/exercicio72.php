<?php
class Transferencia implements MovimentoConta
{
    private $cpf;
    private $valor;

    public function __construct(string $cpf, float $valor)
    {
        $this->cpf = $cpf;
        $this->valor = $valor;
    }

    public function getCPFCorrentista(): string
    {
        return $this->cpf;
    }
    public function getValorMovimento(): float
    {
        return $this->valor;
    }
}
class Gerente implements OperacoesBanco
{
    public function encontraCorrentista(array $todosCorrentistas, string $cpfProcurado): ?Correntista
    {
        $correntista = NULL;

        foreach ($todosCorrentistas as $correntistaProcurado) {
            if ($correntistaProcurado->getCPFCliente() === $cpfProcurado) {
                $correntista = $correntistaProcurado;
                break;
            }
        }

        return $correntista;
    }
}

$contaFilipe = new Correntista('33333333333', 12345);
$contaJoao = new Correntista('77777777777', 54321);
$contaTiago = new Correntista('99999999999', 11223);


$movimentoFilipe = new Transferencia('44444444444', 1212);
$movimentoJoao = new Transferencia( '55555555555', 2121);
$movimentoTiago = new Transferencia('22222222222', 3737);

$c = [ $contaFilipe, $contaJoao, $contaTiago ];

$m = [ $movimentoFilipe, $movimentoJoao, $movimentoTiago ];


function atualizarSaldo(array $todosCorrentistas, array $transferencias): array
{
    foreach ($transferencias as $transferencia) {
        foreach ($todosCorrentistas as $index => $correntista) {
            if ($transferencia->getCPFCorrentista() == $correntista->getCPFCliente()) {
                $saldoAnterior = $correntista->getSaldo();
                $saldoMovimento = $transferencia->getValorMovimento();
                $saldoResultado = $saldoAnterior - $saldoMovimento;
                $todosCorrentistas[$index]->setSaldo($saldoResultado);
            }
        }
    }

    return $todosCorrentistas;
}

$c = atualizarSaldo($c, $m);
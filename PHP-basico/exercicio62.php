<?php

class Plano
{
    private int $pontoX;
    private int $pontoY;

    public function __construct(int $pontoX, int $pontoY)
    {
        $this->pontoX = $pontoX;
        $this->pontoY = $pontoY;
    }

    public function moverPontoOrigemParaDestino(int $pontoX, int $pontoY)
    {
        $this->pontoX += $pontoX;
        $this->pontoY += $pontoY;
    }

    public function validaPonto(int $pontoX, int $pontoY)
    {
        if ($this->pontoX != $pontoX || $this->pontoY != $pontoY) {
            return false;
        }

        return true;
    }

    public function getPontoX(): int
    {
        return $this->pontoX;
    }

    public function getPontoY(): int
    {
        return $this->pontoY;
    }
}
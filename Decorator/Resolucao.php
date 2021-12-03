<?php

abstract class Pao {
    protected float $valor;
    protected string $nome;

    public function valor():float {
        return $this->valor;
    }

    public function nome():string {
        return $this->nome;
    }
}

abstract class PaoComRecheio extends Pao {
    protected Pao $pao;

    public function __construct(Pao $pao) {
        $this->pao = $pao;
        $this->nome = $pao->nome;
        $this->valor = $pao->valor;
    }

    public function nome():string {
        return $this->pao->nome();
    }

    public function valor():float {
        return $this->pao->valor();
    }
}

class PaoDoce extends Pao {
    public function __construct() {
        $this->nome = "Pão doce";
        $this->valor = 2;
    }
}

class PaoDeSal extends Pao {
    public function __construct() {
        $this->nome = "Pão de sal";
        $this->valor = 3;
    }
}

class PaoComRecheioSalame extends PaoComRecheio {
    public function valor(): float {
        return $this->pao->valor() + 1.50;
    }

    public function nome():string {
        return $this->pao->nome() . " + salame";
    }
}

class PaoComRecheioOvo extends PaoComRecheio {
    public function valor(): float {
        return $this->pao->valor() + 0.50;
    }

    public function nome():string {
        return $this->pao->nome() . " + ovo";
    }
}

class PaoComRecheioGeleia extends PaoComRecheio {
    public function valor(): float {
        return $this->pao->valor() + 1.75;
    }

    public function nome():string {
        return $this->pao->nome() . " + geleia";
    }
}

class PaoComRecheioMussarela extends PaoComRecheio {
    public function valor(): float {
        return $this->pao->valor() + 2.20;
    }

    public function nome():string {
        return $this->pao->nome() . " + mussarela";
    }
}

class PaoComRecheioMargarina extends PaoComRecheio {
    public function valor(): float {
        return $this->pao->valor() + 0.30;
    }

    public function nome():string {
        return $this->pao->nome() . " + margarina";
    }
}

class PaoComRecheioAmendoim extends PaoComRecheio {
    public function valor(): float {
        return $this->pao->valor() + 1.80;
    }

    public function nome():string {
        return $this->pao->nome() . " + pasta de amendoim";
    }
}

echo "Pão doce: 3,00 "          . "<br/>";
echo "Pão de sal: 1,00 "        . "<br/>";
echo "Salame: 2,50 "            . "<br/>";
echo "Ovo: 1,00 "               . "<br/>";
echo "Geleia: 3,00 "            . "<br/>";
echo "Mussarela: 4,20 "         . "<br/>";
echo "Margarina: 0,30 "         . "<br/>";
echo "Pasta de amendoim: 1,80 " . "<br/>";

$lanche1 = new PaoDoce();
echo $lanche1->nome() . " Valor: " . $lanche1->valor() . "<br/>";
$lanche1 = new PaoComRecheioSalame($lanche1);

echo $lanche1->nome() . " Valor: " . $lanche1->valor() . "<br/>";
$lanche1 = new PaoComRecheioOvo($lanche1);

echo $lanche1->nome() . " Valor: " . $lanche1->valor() . "<br/>";
$lanche1 = new PaoComRecheioSalame($lanche1);

echo $lanche1->nome() . " Valor: " . $lanche1->valor() . "<br/>";

$lanche2 = new PaoDeSal();
echo $lanche2->nome() . " Valor: " . $lanche2->valor() . "<br/>";
$lanche2 = new PaoComRecheioGeleia($lanche2);

echo $lanche2->nome() . " Valor: " . $lanche2->valor() . "<br/>";
$lanche2 = new PaoComRecheioMargarina($lanche2);

echo $lanche2->nome() . " Valor: " . $lanche2->valor() . "<br/>";
$lanche2 = new PaoComRecheioAmendoim($lanche2);

echo $lanche2->nome() . " Valor: " . $lanche2->valor() . "<br/>";
$lanche2 = new PaoComRecheioMussarela($lanche2);

echo $lanche2->nome() . " Valor: " . $lanche2->valor() . "<br/>";
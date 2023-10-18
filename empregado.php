<?php

/*
*implementar  a classe estagiario
*implementar  a classe empregadoCLT
*implementar  a classe terceirizado
*implementar  a classe folha de pagamento
*/

interface Remuneravel {
    public function remuneracao();
}

class empregadoCLT {
    public remuneravel $empregadoCLT;

    public function remuneracao(remuneravel $empregadoCLT) {
        $this->empregadoCLT= $empregadoCLT;
    }

    public function __toString() {
        echo $this->empregadoCLT;
    }
}

class Carro implements IVeiculo {
    public $chave = "chave_presencial";
    public $airbag = "motorista_carona";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
    
    public function setAirBag($airbag) {
        $this->airbag = $airbag;
        echo "o airbag é... {$this->airbag}<br>";
    }
    
}

class Trator implements IVeiculo {
    public $chave = "chave_normal";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
}

class Carreta implements IVeiculo {
    public $chave = "chave_canivete";

    public function dirigir($chave) {
        $this->chave = $chave;
        $oleo = $this->verificarOleoMotor();
        echo "estou andando... {$this->chave}<br>" . $oleo;
    }

    public function verificarOleoMotor() {
        return "Oleo esta OK!<br>";
    }

}


class Moto implements IVeiculo {
    public $chave = "chave_normal";

    public function dirigir($chave) {
        $this->chave = $chave;
        echo "estou andando... {$this->chave}<br>";
    }
}

$cahve = "xyz";

$carro = new Carro();
$carro->dirigir($cahve);
$carro-setAirBag("airbag_lateral");

$carreta = new Carreta();
$carreta->dirigir("abc");


$moto = new Moto();
$moto->dirigir($cahve);

$veiculo = new Veiculo();
echo $veiculo->locomover($moto);
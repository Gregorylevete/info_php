<?php
// oop || poo

class pessoa {
    const animado = 'vivo';  
    public $cor;
    public $nome;
    protected $endereco;
    Private $cpf;
    private $edade;
    public  $casado;


    public function batir($chute, $pedra) {
        if ($chute == true) {
            echo "ele sente dor <br>";
        } else {
            echo "esta legal <br>";
        } 
    }

    protected function pegarTelefone($tiró){
        if ($suaPareja == false) {
            echo "sua pareja batio ele <br>";
        } else {
            echo "ficaron juntos <br>";
        }
        
    }

    private function tiraroupas() {
        $this->batir();
        self::animado;
    }

    public function dataDeNacimento(){
        echo "a data de nacimento é : 19/19/1987 <br>";
    }
} 

$chute = false;
$pedra = true;
$tiró = true;
$mulher = new pessoa();
$mulher->batir($chute, $pedra);
$mulher->dataDeNacimento();
$mulher->pegarTelefone($tiró);



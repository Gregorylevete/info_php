<?php
// oop || poo

class pessoa {
   
   const animado = 'vivo';  
  
   public $nome;
   public $sobrenome;
   public $edade;
   public $tiro;
   public $suaPareja;

    public function __construct ($nome, $sobrenome,$edade) {
        
        $this-> nome = $nome;
        $this-> sobrenome = $sobrenome;
        $this-> edade = $edade;
    }

    public function pegarTelefone($suaPareja){
        if ($suaPareja == 0) {
            echo "sua pareja batio ele <br>";
        } else {
            echo "ficaron juntos <br>";
        }
        
    }


    public function dataDeNacimento(){
        echo "a data de nacimento é : 19/19/1987 <br>";
    }
} 


$nome= "nome";
$sobrenome  ="sobrenome";
$edade ="edade";
$mulher = new pessoa();
$mulher->dataDeNacimento();
$mulher->pegarTelefone(0);
$mulher ->
/*class saiyajin {
    
    public string $nombre= "goku";
    public int $nivel_pelea=1000;

    public function saludar(){
        return "hola soy".$this->nombre;
    }

    public function nivelDePelea(){
        return $this->nombre. "tiene un nivel de pelea".$this->nivel_pelea;
    }
}
*/

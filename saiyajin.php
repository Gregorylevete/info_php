<?php



class saiyajin {
    
    public $nombre;
    public $nivel_pelea;
    
    public function __construct($nombre,$nivel){
     $this->nombre=$nombre;
     $this->nivel_pelea=$nivel;

    }

    public function saludar($texto){
        return $texto.$this->nombre;
    }

    public function nivelDePelea(){
        return $this->nombre. " tiene un nivel de pelea de ".$this->nivel_pelea;
    }
}

$goku = new saiyajin(nivel:1000,nombre:"Goku");
echo $goku->nivelDePelea("hola soy " ); 

echo "<br><br>";


$vegueta = new saiyajin("Vegueta",950);
echo $vegueta->nivelDePelea("mi nombre es ");
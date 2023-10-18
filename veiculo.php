<?php

     
    interface iveiculo{
        public function dirigir($chave);

    }



    abstract class veiculo implements iveiculo {
        public function dirigir($chave){
            echo "estou dirigindo.. {$chave}<br>";

        }

    }

    class carro extends veiculo {
      public $chave = "chave_presencial";

      public function andar(){
        $this->dirigir($this->chave);
        echo "estou andando...<br>";
      }
    }

    class trator extends veiculo {
        public $chave = "chave_normal";

        public function arrar() {
          $this->dirigir($this->chave);
        }
        
    }
    
        class carreta extends veiculo {
            public $chave = "chave_canivete";

            public function viajar(){
                $this->verificarOleoMotor();
                $this->dirigir($this->chave);
        }

        public function verificarOleoMotor(){

        }

        
    }
    $carro = new carro ();
    $carro->andar();
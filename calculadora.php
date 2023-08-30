<?php

// // + - * ^ % / pot numPar index


// $value1 = "100"; // porcentagem
// $value2 = "100"; // preço
// $operation = "ma";

// $result = 0;


// if ($operation == "+") {

//     $result = $value1 + $value2; // 20 = 10 + 10
// }

// if ($operation == "*") {

//     $result = $value1 * $value2; // 100 = 10 * 10
// }

// if ($operation == "-") {

//     $result = $value1 - $value2; // 0 = 10 - 10
// }

// if ($operation == "/"){


//     $result = $value1 / $value2; // 1 = 10 / 10
// }
// if ($operation == "^"){

//     $result = $value1 ** $value2; //
// }


// if ($operation == "perc"){

//     $desconto = ($value1 * $value2) / 100; // 10
//     $result = $value2 - $desconto;
// }
    
// if ($operation == "perc+"){

//     $desconto = ($value1 * $value2) / 100; // 10
//     $result = $value2 + $desconto;
// }
    

// if ($operation == "ma"){

//     $result = ($value1 + $value2) / 10; // 10
    

// }

// // echo $result; // 20

//     for ($c = 0; $c < 10; $c++) {

//         //echo "For: o valor de C é {$c}<br>";
//     }


    
//     $c = 0;
    
//     while ($c < 10) {

//        //echo "While:o valor de C é {$c}<br>";
//         $c++;
//     }



//     $num = 10;

//     for ($i = 0; $i <= 10; $i++) {
//         $resultado = ($num * $i);
//        // echo "{$num} * {$i} = ". $resultado ."<br>" ;
//     }



//     $media = 6;


//     $prova = 7;
//     $peso = 5;

//     $prova2 = 3;
//     $peso2 = 3;

//     $prova3 = 2;
//     $peso3 = 2;

//     $numerador = ($prova * $peso) + ($prova2 * $peso2) + ($prova3 * $peso3);

//     $denominador = ($peso + $peso2 + $peso3);

//     $MP = $numerador / $denominador;

//     if ($MP >= $media) {
//        // echo "Aluno Aprovado com a média {$MP}";
//     } else {
//         //echo "Aluno Reprovado com a média {$MP}";
//     }



//         $notas = [5, 10, 4];
//         $smtotal = 0;

//         for($i = 0; $i < count($notas); $i++){
//             $smtotal += $notas[$i];
//         }


//         $resultado = $smtotal / count($notas);

//         if($resultado >= 6){
//             //echo "Aprovado, média final {$resultado}";
//         }else{
//             //echo "Reprovado, média final {$resultado}";
//         }


//         $mes = [

//             "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
//         ];


//             $numMes = 5;

//         if($numMes >=1 && $numMes <=12){

//             //echo $mes[$numMes - 1];

            
//         }else{

//            // echo "Mês inválido";
//         }



        //Calcular os 1 primeiros numeros primos
        // 1 - 9

$numero = 3;
$divisor = 5;
$contPrimos = 0;
$arrayPrimos = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];


while($contPrimos < 1) {

    $resto = $numero / $divisor; // 0

    if ($resto != 0) {
        // sempre que encontrar um primo adiciona no array.
        array_push($arrayPrimos, $numero);
        //echo "È primo {$numero}<br>";
    } else {
        //echo "Não é primo {$numero}<br>";
    }  

    $divisor ++;
    $contPrimos++;
}


    // 1 Calcular o tempo de um jogo de futebol a partir das
    // variaveis $horaInicial e $horaFinal e ao final exibir o tempo
    // decorrido desse jogo.

    //Dica: utilizar a funcao "explode" do php para quebrar a hora em partes(array)


    $acrescimos = 0;
    $horaInicial = '16:00:00';
    $horaFinal = '17:30:00';

    $arrHora = explode(":", $horaInicial);
    $hora = $arrHora[0];
    $minutos = $arrHora[1];
    $segundos = $arrHora[2];
 
    $horaEmSegundos = $hora * 3600;
    $minutosEmSegundos = $minutos * 60;
    
    $totalInicialEmSegundos = $horaEmSegundos + $minutosEmSegundos + $segundos;

    $arrHora = explode(":", $horaFinal);
   $horaFinal = $arrHora[0];
   $minutosFinal = $arrHora[1];
   $segundosFinal = $arrHora[2];

   $horaFinalEmSegundos = $horaFinal * 3600;
   $minutosFinalEmSegundos = $minutosFinal * 60;
   
   $totalFinalEmSegundos = $horaFinalEmSegundos + $minutosFinalEmSegundos + $segundosFinal;

   $tempoDoJogo = ($totalFinalEmSegundos - $totalInicialEmSegundos) /60;
    //echo "o Resultado final é: $tempoDoJogo";
    

    // calcular o tempo de jogo de um dia para o outro 

    $acrescimos = 0;
    $horaInicial = '23:00:00';
    $horaFinal = '00:30:00';

    $arrHora = explode(":", $horaInicial);
    $hora = $arrHora[0];
    $minutos = $arrHora[1];
    $segundos = $arrHora[2];
    
    $diaEmSegundos = 86400;          
    $horaEmSegundos = $hora * 3600;
    $minutosEmSegundos = $minutos * 60;
    
    $totalInicialEmSegundos =  $horaEmSegundos + $minutosEmSegundos + $segundos;

    $arrHora = explode(":", $horaFinal);
   $horaFinal = $arrHora[0];
   $minutosFinal = $arrHora[1];
   $segundosFinal = $arrHora[2];

   $horaFinalEmSegundos = $horaFinal * 3600;
   $minutosFinalEmSegundos = $minutosFinal * 60;
   
   $totalFinalEmSegundos =  $horaFinalEmSegundos + $minutosFinalEmSegundos + $segundosFinal ;

   $tempoDoJogo = ($totalFinalEmSegundos - $totalInicialEmSegundos) / 60 ;

   if ($tempoDoJogo <= 0 ) {
      
        $difinicial =  $diaEmSegundos - $totalInicialEmSegundos;
        $tempoDoJogo = ($difinicial + $totalFinalEmSegundos)/60 ;
   }
    
   echo "<br>o Resultado é: {$tempoDoJogo}<br>";

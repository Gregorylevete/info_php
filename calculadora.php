<?php

// // + - *, /, ^, %, 
// $value = 1;
// $value2 = 10;
// $operador  = "/";

// $resultado = 0;

// // si el operador es division
// if ($operador == "/"); {
//     $resultado = $value / $value2; 
// }

// // si el operador es multiplicado
// if ($operador == "*") {
//     $resultado = $value * $value2; 
// }


// // si el operador es restado
// if ($operador == "-") {
//     $resultado = $value - $value2; 
// }

// // si el operador es sumado
// if ($operador == "+") {
//     $resultado = $value + $value2; 
// }

// // si el operador es potenciado
// if ($operador == "pow") {
//     // mostrara el resulta elevado a potenciado
//     $resultado = pow($value, $value2); 
// }
//     // si el operador 
// if ($operador == "%") {
//     // mostrara el resultado 
//     $resto =  ($value % $value2); 
//     if ($resto == 0) {
//         $resultado = "es par";
//     }else{
//         $resultado = "no es par";

//     }
// }
// // porcentual
// if ($operador == 'perc') {
//     $desconto = ($value * $value2) / 100; //10
//     $resultado = $value - $desconto;

// }
// //porcentual acrescentado
// if ($operador == 'perc+') {
//     $acrescimo= ($value * $value2) /100;
//     $resultado = $value + $acrescimo;

// }
// // medida aritmetica
// if ($operador == 'ma') {
//     $resultado = ($value + $value2) / 2;

// }

// // echo "O valor é: {$resultado}";


// //
// $num=1;

// while ($num <= 20) {
//    // echo "while o valor é {$num} <br>"; 
    
//     $num++;
// }


// for ($i=0; $i < 10 ; $i++) { 
    
//     //echo" {$i} <br>";
// }

// $i=0;

// do {
//     //echo "do while {$i} <br>";
//     $i++;
// }while($i<10);



// $num =2;
// for ($i= 0; $i <= 10 ; $i++) { 
   
//     //echo "{$num} * {$i} = " . ($num * $i) ."<br>"; 
    
    
// }


// // media ponderada o Boletin escolar
// $media =3 ;

// $prova = 4.8;
// $peso = 5;
// $prova2 = 1.5;
// $peso2 = 3;
// $prova3 = 2;
// $peso3 = 2;

// $numerador = ($prova *$peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
// $denominador = ($peso + $peso2 + $peso3);

// $mp = $numerador / $denominador;

// if ($mp >= $media) {
//   // echo "o alumno Gregory foi aprovado a media é {$mp}";
// } else {
// //   echo "o alumno Gregory foi Reprovado a media é {$mp}";
// }

// // media harmonica o Boletin escolar
// $media = 4;

// $a = 2;
// $peso = 1;
// $b = 3;
// $peso2 = 1;
// $c = 4;
// $peso3 = 1;

// $numerador = ($a / $peso) + ($b / $peso2) + ($c / $peso3);
// $denominador = ($peso + $peso2 + $peso3);

// $mh = $numerador / $denominador;

// if ($mh >= $media) {
//    // echo "o alumno Gregory foi aprovado a media é {$mh}";
//  } else {
//    // echo "o alumno Gregory foi Reprovado a media é {$mh}";
//  }

 

// $notas = [5,10,4];
// $smtotal = 0;
 
//   for ($i=0; $i < count($notas ) ; $i++) { 
//     $smtotal += $notas [$i];
   
//  }

//  //echo "{$smtotal} <br>";


//  $mes =[
// "Janeiro", "fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"
//  ];
//  $numMes = 13;

//   if ($numMes >=1 && $numMes <=12) {
//      echo $mes[$numMes - 1];
//   }else {
//     // echo "Mes invalido o no existe <br>";
//     // echo "Bihanzero";
//      }

//      // calcular os 1 primeiros numeros primos

//  $numero   = 1;
//  $contador = 0;
 
//   for ($i = 1; $i <= $numero ; $i++) 
//   { 
//     if ($numero % $i == 0)
//      {
//         $contador++;# code...
//     }# code...
//   }
//    if ($contador == 2)
//     {
//        //echo "primo"; # code...
//    }
//    else
//    {
//        //echo "nao primo";  
//    }


   // 1 calcular o tempo d um jogo de futebol a partir das 
   //variaveis $hora uinicial e $hora final e ao final exibir o tempo
   // decorrido desse jogo

   // dica: usar funçao explode de php

   
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

    //echo "Tempo do Jogo {$tempoDoJogo} minutos Gano inter 2 a 0";


    //2 considerar o algoritmo anterior e implementa a logica para um jogo
    // que comenca em um dia e termina em outro

    $acrescimos = 5;
    $horaInicial = '23:00:00';
    $horaFinal = '00:30:00';

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

    //echo "Tempo do Jogo {$tempoDoJogo} minutos Gano inter 2 a 0";
 
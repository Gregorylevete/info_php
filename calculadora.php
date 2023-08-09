<?php

// + - *, /, ^, %, 
$value = 1;
$value2 = 10;
$operador  = "/";

$resultado = 0;

// si el operador es division
if ($operador == "/") {
    $resultado = $value / $value2; 
}

// si el operador es multiplicado
if ($operador == "*") {
    $resultado = $value * $value2; 
}


// si el operador es restado
if ($operador == "-") {
    $resultado = $value - $value2; 
}

// si el operador es sumado
if ($operador == "+") {
    $resultado = $value + $value2; 
}

// si el operador es potenciado
if ($operador == "pow") {
    // mostrara el resulta elevado a potenciado
    $resultado = pow($value, $value2); 
}
    // si el operador 
if ($operador == "%") {
    // mostrara el resultado 
    $resto =  ($value % $value2); 
    if ($resto == 0) {
        $resultado = "es par";
    }else{
        $resultado = "no es par";

    }
}
// porcentual
if ($operador == 'perc') {
    $desconto = ($value * $value2) / 100; //10
    $resultado = $value - $desconto;

}
//porcentual acrescentado
if ($operador == 'perc+') {
    $acrescimo= ($value * $value2) /100;
    $resultado = $value + $acrescimo;

}
// medida aritmetica
if ($operador == 'ma') {
    $resultado = ($value + $value2) / 2;

}

// echo "O valor é: {$resultado}";


//
$num=1;

while ($num <= 20) {
   // echo "while o valor é {$num} <br>"; 
    
    $num++;
}


for ($i=0; $i < 10 ; $i++) { 
    
    //echo" {$i} <br>";
}

$i=0;

do {
    //echo "do while {$i} <br>";
    $i++;
}while($i<10);



$num =2;
for ($i= 0; $i <= 10 ; $i++) { 
   
    //echo "{$num} * {$i} = " . ($num * $i) ."<br>"; 
    
    
}


// media ponderada o Boletin escolar
$media =3 ;

$prova = 4.8;
$peso = 5;
$prova2 = 1.5;
$peso2 = 3;
$prova3 = 2;
$peso3 = 2;
$numerador = ($prova *$peso) + ($prova2 * $peso2) + ($prova3 * $peso3);
$denominador = ($peso + $peso2 + $peso3);

$mp = $numerador / $denominador;

if ($mp >= $media) {
   echo "o alumno Gregory foi aprovado a media é {$mp}";
} else {
    echo "o alumno Gregory foi Reprovado a media é {$mp}";
}

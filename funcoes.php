<?php

$valor1 = "1"; // porcentagem
$valor2 = "2"; // preço
$operador = "!!";

$result = 0;

function soma($valor1 , $valor2){
    if ($valor1== 0){
        return $valor1;
    }

    return $valor1 + $valor2; 
}

function sub($valor1 , $valor2){
    if ($valor1== 0){
        return $valor1;
    }

    return $valor1 - $valor2; 
}

function mul($valor1 , $valor2){
    if ($valor1== 0){
        return $valor1;
    }

    return $valor1 * $valor2; 
}

function div($valor1 , $valor2){
    if ($valor1== 0){
        return $valor1;
    }

    return $valor1 / $valor2; 
}

function pot($valor1, $valor2) {

    return pow($valor1, $valor2);
}

function moduloDivisao($valor1, $valor2) {

    return $valor1 % $valor2;
}

function numeroPar($valor1) {
    $resto = moduloDivisao($valor1, 2);

    if ($resto == 0) {
        $par = 1;
    } else {
        $par = 0;
    }

    return $par;
}

function calcular($operador ,$valor1 , $valor2 ){
    if ($operador == '+'){
        return soma($valor1 , $valor2);
    }

    if ($operador == '-'){
        return sub($valor1 , $valor2);
    }


    if ($operador == '*'){
        return mul($valor1 , $valor2);
    }

    if ($operador == '/'){
        return div($valor1 , $valor2);
    }

    if ($operador == '^') {
        return pot($valor1, $valor2);
    }

    if ($operador == '%') {
        return moduloDivisao($valor1, $valor2);
    }

    if ($operador == '!!') {
        return numeroPar($valor1);
    }

    if ($operador == '@@') {
        return numeroAnoBissextop($valor1);
    }

}

function exibirResultadoLogico($resultado, $valor1) {
    
    if ($resultado == 1) {
        $situacao = "par";
    } else {
        $situacao = "impar";
    }

    echo "O numero informado({$valor1}) é {$situacao}" . "<br>";
}

function verificarTipoOperador($operador, $resultado, $valor1) {

    /*
        '!!' = verificar par
        '##' = verifica primos
        '@@' = verifica se o $valor1 se ele é um ano bissexto.
    */ 
    $operadoresLogicos = [
        '!!',
        '##',
        '@@'
    ];

    if (in_array($operador, $operadoresLogicos)) {
        return exibirResultadoLogico($resultado, $valor1);
    } else {
        return exibirResultado($resultado);
    }
}
$resultado = calcular($operador ,$valor1 , $valor2 );


function mostrarResultado ($resultado){
   // echo $resultado . "<br>";
}

mostrarResultado($resultado);



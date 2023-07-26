<?php

// + - *, /, ^, %, 
$value = 2;
$value2 = 2;
$operador  = "%";

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

echo "O valor é: {$resultado}";




// + - * / 
$value ='24';
$value2 = "24";
$operador  = "+";

$resultado = 0;

if ($operador == "/") {
    $resultado = $value / $value2; 
}

if ($operador == "*") {
    $resultado = $value * $value2; 
}


if ($operador == "-") {
    $resultado = $value - $value2; 
}


if ($operador == "+") {
    $resultado = $value + $value2; 
}

echo $resultado;


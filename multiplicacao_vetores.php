<?php
/*
multiplicar  um veto $A por um vetor $b e salvar o produto desa multiplicacao em um novo vetor chamado $resultado

$a = [2,3,4];
$b = [5,6,7]
;*/


$a = [2,3,4];
$b = [5,6,7];

$resultado =  [];

// $result0 = $a[0] * $b[0];
// array_push($resultado, $result0);

// $result1 = $a[1] * $b[1];
// array_push($resultado, $result1);

// $result2 = $a[2] * $b[2];
// array_push($resultado, $result2);

for ($i = 0; $i < count($a); $i++) {
    $result = $a[$i] * $b[$i];
    array_push($resultado, $result);
}

$mostraResultado = implode(",", $resultado);

echo "O produto da multiplicacao dos vetores é: {$mostraResultado}";

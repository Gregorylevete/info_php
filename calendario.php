<?php

/*
implementar a logica de um calendario,
considerando os dias validos para cada mes
e os anos bissexto. caso for informada uma data invalida,
corrigir para proxima data valida, ex.: 31/04/1990 => 01/05/1990;
e qunado for ano bissexto informar que o ano e bissexto,
ex.: 2022 => 0 ano é bissexto.
ex.: 2100 => 0 ano nao é bissexto.
$ano = 1988;
$bissexto= date('L', mktime(0, 0, 0, 1, 1, $ano));
echo $ano . ' ' . ($bissexto? 'é' : 'não é') . ' um ano bissexto.';

*/

$dataStr = "22/05/1990";
$data = explode("/", $dataStr);
$dia = $data [0];
$mes = $data [1];
$ano = $data [2];


if ($dia < 1 || $dia > 31 ) {
    $dia = 1;
}

if ($mes < 1 || $mes > 12 ) {
    $mes = 1;
}

$meses30dias = [4,6,9,11];
$meses31dias = [1,3,5,7,8,10,12];

if (in_array($mes, $meses30dias) && $dia > 30) {
    $dia = 1;
    $mes += 1;
}

if (in_array($mes, $meses31dias) && $dia > 30) {
    $dia = 1;
    $mes += 1;
}

if (in_array($mes, $meses30dias) && $dia >= 30) { // set(09) => ago(08)
    $dia = 31;
    $mes -= 1;
}

if (in_array($mes, $meses31dias) && $dia >= 30) { // out(10) => set(09)
    $dia = 30;
    $mes -= 1;
}








/*
$year = date('Y');
if (($year % 4 == 0) && ($year % 100 != 0 || $year %400 == 0)) {
    echo "$year é bissexto";
} else {
    echo "$year não é bissexto";
}


$ano = 1988;
$bissexto= date('L', mktime(0, 0, 0, 1, 1, $ano));
echo $ano . ' ' . ($bissexto? 'é' : 'não é') . ' um ano bissexto.';
function esBisiesto($year=NULL) {
    $year = ($year==NULL)? date('Y'):$year;
    return ( ($year%4 == 0 && $year%100 != 0) || $year%400 == 0 );
}
*/





<?php
/*calcular o fatorial de um numero qualquer, 
ex. $numero = 5.
(5!) => 5 *4*3*2*1 = 120;
dica: utilizar laço de repetiçao. 
*/
$numero = 5;
$fatorial = 1 ;
$contador = 1 ;    
 
 while ($contador <=$numero ){

 $fatorial *= $contador ;
 $contador++;

 }

 echo  " <h1> o fatorial de", $numero, "e =", $fatorial , "</h1>";


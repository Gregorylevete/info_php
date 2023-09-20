<?php
// encontrar o maior valor em um conjunto de numeros em um array. e exibir esse valor ao final para o usuario.

$nums = [10,80,5,14,90,29,99,1,122,2023];
 
$n = count($nums);
// imprementar a logica para encontrar o 99;
// while ||for e if

for ($contador=0; $contador < $n ; $contador++) { 
    if ($contador == 0) {
        $mayor = $nums[0];
    } else {
        if ($nums[$contador] > $mayor)
        {
            $mayor = $nums[$contador];
        }
    }
}       
    
 echo "mayor:";
 echo $mayor;

 /*por meio da tecnica de ordenaçao bubble sort,
 ordene o array abaixo em ordem crescente.
 dica: utilize o laço de repetiçao FOR , pode ser necesario mais de um e 
 tambem deve ser  utilizado um if.
 */
$nums [10;80,5,14,90,29,99,1];

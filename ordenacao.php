<?php
// encontrar o maior valor em um conjunto de numeros em um array. e exibir esse valor ao final para o usuario.

//$nums = [10,80,5,14,90,29,99,1,122,2023];
 
//$n = count($nums);
// imprementar a logica para encontrar o 99;
// while ||for e if

/*for ($contador=0; $contador < $n ; $contador++) { 
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
/*$nums [8;12,24,14,90,29,99,1];
$tamanhoArray = count ($nums);

for($i = 0; $i< $tamanhoArray; $i++){
    for ($j=$tamanhoArray / 2;  $j < 1 ; $j++) { 
    if ($nums [$j] > $nums[$j + 1]) {
        $temp = $nums 
    }.
    }
}
*/



// remover valores duplicados  de um array


/*$frutas = [
"maça",
"banana",
"laranja",
"banana",
"uva",
"maça","maça",

];
// saida esperada : maça , banana, laranja , uva
// dica: in_array(), array_merge(), isset() array_unique()



/*$newFrutas = [];
for ($i = 0; $i < count($frutas); $i++ ) {

     if (!in_array($frutas[$i],$newFrutas)) {
         array_push($newFrutas, $frutas[$i]);
     }
}

*///echo implode(",",$newFrutas);



// contar valores duplicados  de um array


$frutas = [
    "maça",
    "banana",
    "laranja",
    "banana",
    "uva",
    "maça","maça",
    
    ];
    // saida esperada : maça , banana, laranja , uva
    // dica: in_array(), array_merge(), isset() array_unique()
 
    $newFrutas = [];
    for ($i = 0; $i < count($frutas); $i++ ) {

        $fruta = $frutas[$i];
    
         if (!isset($newFrutas[$fruta])) {
            $newFrutas[$fruta] = 1; // ["maca"] = 1
         } else {
            $newFrutas[$fruta] += 1; // ["maca"] += 1 (2)
         }
    }
    
    echo implode(",",$newFrutas,);
    
    
 














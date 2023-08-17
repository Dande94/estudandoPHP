<?php 
//modifica o array, se adaptando as novas informações;
$array = range('a','f');

//array_splice($array, 1,1);//a partir no item 1 do array, remover apenas 1 item;
//array_splice($array, 2);//remover todos os itens começando pela posição 2 array;
//array_splice($array, 2,3);//remover 3 itens a partir da posição do 2 array;
//array_splice($array, 2,1,'K');//subtituição, nesse caso subtituiu o'c' pelo 'K' pois se encontrava naquela posição;
//array_splice($array, 2,2,'K');//removeu itens e subtituiu por outro, nesse caso removeu o'c' e 'd' pelo 'K' pois se encontrava naquela posição;
array_splice($array, 2,2,['K','O']);//substituindo itens multiplos, usando array;

print_r($array);


?>
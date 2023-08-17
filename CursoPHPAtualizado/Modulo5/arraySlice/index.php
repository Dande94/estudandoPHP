<?php 
$array = range('a','f');

//$retorno = array_slice($array, 0,2);//função fatiar o array com 3 parametros, 1º o array, 2º onde começa , 3º quantos itens pegar.
//$retorno = array_slice($array, 2,2);//secção de valores, começando pela posição 2ª do array pegue dois itens;
//$retorno = array_slice($array, -2,1);//descrescente, começando pelo final do array, a partir do penultimo item, pegue só 1;
$retorno = array_slice($array, -1,1);//descrescente, começando pelo final do array, pegando o ultimo número;

print_r($retorno);

?>
<?php 
$array =['Anderson', 29, 'Nescau', 'marrom'];
/*
$nome = $array[0];
$idade = $array[1];
$bebida = $array[2];
$cor = $array[3];
*/
//criando preencher váriaveis tomando de base o array em um unico comando;
list($nome, $idade, $bebida, $cor)=$array;//a ordem das variavéis tem que ser concisa com os valores do array

echo "{$nome} tem {$idade} anos e gosta de beber {$bebida} da cor {$cor}";

?>
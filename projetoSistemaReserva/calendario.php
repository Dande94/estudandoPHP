<?php
$data = '2023-06';//mes e ano de referencia;

$dia1 = date('w', strtotime($data.'-01'));// o 'w' na função date trás a dia da semana como se fosse uma posição de array;

$dias = date('t', strtotime($data));//o 't' trás a quantidade de dias naquele mês;

$linhas = ceil(($dia1+$dias) / 7);//contabilizar a quantidade de linhas para o mês;

$dia1 = -$dia1;//transformando em negativo para poder referencia o domingo;

$data_inicio =  date('Y-m-d', strtotime($dia1.'days', strtotime($data)));//para saber qual dia inicia aquela semana;

/*
*/
echo 'Primeiro Dia: '.$dia1.'<br>';// expressando o dia da semana que começa o mês;
echo 'Total de dias no mês: '.$dias.'<br>';
echo 'Linhas p/ semana: '.$linhas.'<br>';
echo 'Dia que se inicia aquela semana: '.$data_inicio;

?>
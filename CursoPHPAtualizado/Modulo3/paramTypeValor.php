<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


function somar(int $n1 ,int $n2=0,int $n3 = 0){//ao adicionar o 'int' é definido o type ao parametro assim blindando contra erro de tipagem, como tentar somar strings;
    $total = $n1 + $n2 + $n3;

    return $total;
}
$soma = somar(10,5,2);
$soma1 = somar(12);
$soma2 = somar(8,12);
$soma3 = somar($soma, $soma1, $soma2);

echo $soma3;

?>
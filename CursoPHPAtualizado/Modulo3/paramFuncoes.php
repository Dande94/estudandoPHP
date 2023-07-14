<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


function somar($n1 , $n2){
    $total = $n1 + $n2;

    return $total;
}
$soma = somar(10,5);
$soma2 = somar(8,12);
$soma3 = somar($soma, $soma2);

echo $soma3;

?>
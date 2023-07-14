<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

/**
 * 
    $dizimo = function(int $n1){
        return $n1 * 0.1;
};
 */

$dizimo = fn(int $n1) => $n1 * 0.1;
$somar = fn(int $n1, int $n2 ) => $n1 + $n2;

echo $dizimo(90);

echo '<br>';

$funcao = $dizimo;
echo $funcao(82);

echo '<br>';
echo $somar(10 ,5);

?>

<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


$dizimo = function(int $n1){
    return $n1 * 0.1;
};

echo $dizimo(90);

echo '<br>';

$funcao = $dizimo;
echo $funcao(82);

?>

<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

function dividir($numero){
    $metade = $numero / 2;

    echo $metade."<br>";

    if(round($metade) >  0){
        dividir($metade);
    }
}

dividir(100);

?>

<!-- 
    metodo onde se chama uma função dentro dela mesmo;
 -->
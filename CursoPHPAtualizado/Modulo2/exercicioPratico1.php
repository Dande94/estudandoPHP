<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

for($i = 1; $i <= 10 ; $i++){
    for($j = 1; $j <= 10 ; $j++){
        echo '-';
    }
    echo '<br>';
}


//Resolução concluída;
?>
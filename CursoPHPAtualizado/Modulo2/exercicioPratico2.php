<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

for($i = 0; $i < 20 ; $i++){
    for($j = 0; $j < $i ; $j++){
        echo '-';
    }
    echo '<br>';
}

for($i = 0; $i < 20 ; $i++){
    for($j = $i; $j < 20 ; $j++){
        echo '-';
    }
    echo '<br>';
}


//Resolução concluída;
?>
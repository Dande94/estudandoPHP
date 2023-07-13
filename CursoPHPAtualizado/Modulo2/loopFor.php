<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

for($n=0; $n < 10 ;$n++){
    echo "N:".$n."<br>";
}


?>
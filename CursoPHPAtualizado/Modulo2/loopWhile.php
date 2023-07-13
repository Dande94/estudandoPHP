<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$numero = 10;
$numero = 0;

while($numero <= 10){
    echo "N:".$numero."<br>";
    $numero++;;
}

// o whilhe verifica a condição antes de entrar no loop; 

?>
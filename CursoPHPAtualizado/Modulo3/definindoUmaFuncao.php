<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


function subsequente(){
    for($q=0; $q <= 10; $q++ ){
        echo $q."<br>";       
    }
    
    echo "<hr>";       
}

subsequente();
subsequente();
subsequente();

?>
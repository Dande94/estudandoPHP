<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


$ingredientes1 = [
    'Farinha',
    'Açucar',
    'Ovo',
    'Fermento',
    'Leite'
];

echo $ingredientes1[0];
echo '<br>';
echo $ingredientes1[4];
echo '<br>';
//echo $ingredientes1[9];//expressar um 'Notice' ou 'Warning', pq não existe esse registro no array;

//___________________________________
$numeros= [
    10,8,6,99,47,60
];
print_r($numeros)

?>
<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


$bolo1 = [
    'Farinha',
    'Açucar',
    'Ovo',
    'Fermento',
    'Leite'
];
print_r($bolo1);
echo "<br>";

$bolo2 = [
    ...$bolo1,
    'Corante'
];
print_r($bolo2);
echo "<br>";

$bolo3 = [
    'Morangos',
    ...$bolo2,
    'Chocolate'
];
print_r($bolo3); 
echo "<br><br>";
//_______________________________________________________________

$nomes1 = ['Anderson','Gisele','Isabel'];
$nomes2 = ['Edson','Teresinha','Andrey'];
$nomes3 = [...$nomes1, ...$nomes2];
print_r($nomes1); 
echo "<br>";
print_r($nomes2); 
echo "<br>";
print_r($nomes3); 




?>
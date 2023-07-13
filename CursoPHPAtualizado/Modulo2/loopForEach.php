<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


$ingredientes = [
    'Farinha',
    'Açucar',
    'Ovo',
    'Fermento',
    'Leite'
];
print_r($ingredientes);

echo '<br><br>';

foreach($ingredientes as $item){
    echo $item.'<br>';
}

echo '<br><br>';

//trazer a chave de posição de cada item do array;
foreach($ingredientes as $chave => $item){
    echo $chave.'.'.$item.'<br>';
}
echo '<br><br>';
foreach($ingredientes as $chave => $item){
    echo ($chave + 1).'.'.$item.'<br>';
}



?>
<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$lista = [
    'nome' => 'Anderson',
    'idade' => 29,
    'atributos' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

print_r($lista);

echo "Nome: ".$lista['nome']."<br>";
echo "Força: ".$lista['atributos']['força']."<br>";
echo "Mana: ".$lista['mana']."<br>";

//Resolução concluída;

?>
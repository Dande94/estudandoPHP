<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$nome = "Anderson";
$nomeCompleto = $nome;
// $nomeCompleto .= $sobrenome;//por não existir no script irá  gerar erro;

//metodo antigo de detecção de variavel vazia;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; //verifica o preeenchimento da variavel e se tiver algo aplica a o que está armazenado nela se não aplica um 'vazio' na variavel;

//versão NULL CAO
$nomeCompleto .= $sobrenome ?? ''; //verifica o preeenchimento da variavel e se tiver algo aplica a o que está armazenado nela se não aplica um 'vazio' na variavel;
echo $nomeCompleto;
echo "<br><br>";
//__________________________________________
//ambas variaveis vazias;
$nomeCompleto2 = $nome2 ?? 'Visitante';
$nomeCompleto2 .= $sobrenome ?? '';
echo $nomeCompleto2;



?>
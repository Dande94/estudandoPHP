<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$tipo = 'imagem';

switch($tipo){
    case 'foto':
        echo 'Exibindo foto';
        break;
    case 'video':
        echo 'Exibindo video';
        break;
    case 'texto':
        echo 'Exibindo texto';
        break;
    default:
        echo 'Não identificado!';    
        break;
}


?>
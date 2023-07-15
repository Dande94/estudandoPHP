<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$data = '28-06-1994';
$time = strtotime($data);
echo $time;
echo "<br>";
$diaData = date('d / m / Y', $time);
$semanaData = date('w', $time);
switch($semanaData){
    case '0':
        $dSemana = 'Domingo';
        break;
    case '1':
        $dSemana = 'Segunda-Feira';
        break;
    case '2':
        $dSemana = 'Terça-Feira';
        break;
    case '3':
        $dSemana = 'Quarta-Feira';
        break;
    case '4':
        $dSemana = 'Quinta-Feira';
        break;
    case '5':
        $dSemana = 'Sexta-Feira';
        break;
    case '6':
        $dSemana = 'Sabádo';
        break;
}
echo $diaData." - ".$dSemana;

?>
<?php
$tempoEspera = 5;
header("refresh: $tempoEspera");
//______________________________
require_once 'tempo.class.php';
$t = '2023-07-19 21:00:00';
$data = date('d/m/Y H:i:s', strtotime($t));
echo $data.'<br/> foi há '.Tempo::diferenca($t).' atrás';

?>
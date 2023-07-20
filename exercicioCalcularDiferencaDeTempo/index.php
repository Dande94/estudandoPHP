<?php
$tempoEspera = 2;
header("refresh: $tempoEspera");
//______________________________
require_once 'tempo.class.php';
$t = '2015-01-13 08:00:00';
$data = date('d/m/Y H:i:s', strtotime($t));
echo $data.'<br/> foi há '.Tempo::diferenca($t).' atrás';

?>
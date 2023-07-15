<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

echo time();//tempo em segundos desde 01/011970;
echo "<br>";
date_default_timezone_set('America/Sao_Paulo');//ajustar a time zone;
echo 'Dia:'.date('z - d/m/Y H:i:s l');//tras a data atual, o formato desejado é o prametro; para consulta -> <https://www.php.net/manual/pt_BR/function.date> <https://www.php.net/manual/pt_BR/datetime.format.php>;

echo "<br>";
echo date('Y-m-d')." - Padrão internacional";
echo "<br>";
$data = '15-07-2023';
$time = strtotime($data);
//usando o 2º parametro de date();
echo date('d - m - Y', $time);
echo "<br>";
//simplificando
echo date('d - m - Y', strtotime($data));


?>
<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$nomeSujo = '                  Anderson                                ';
echo "Nome Sujo: ".$nomeSujo;
echo "<br>";
$nomeLimpo = trim($nomeSujo);
echo "Nome Limpo: ".$nomeLimpo;
echo "<br>";
echo "Nome Sujo: ".strlen($nomeSujo);
echo "<br>";
echo "Nome Limpo: ".strlen($nomeLimpo);
// strlen(); contagemde de caracteres em uma string; 
echo "<br><br>";
$n2  = "ANDERSON NUNES";
echo "Aplicando strtolower() em: ".$n2." => ".strtolower($n2);
echo "<br>";
$n2  = "anderson nunes";
echo "Aplicando strtoupper() em: ".$n2." => ".strtoupper($n2);
// altera o case da string;
echo "<br><br>";
$n2  = "anderson nunes";
echo "Aplicando str_replace('nunes','silva',variavel ) em: ".$n2." => ".str_replace('nunes','silva',$n2);
echo "<br>";
echo "Aplicando str_replace('e','3',variavel ) em: ".$n2." => ".str_replace('e','3',$n2);
// procura uma string e troca por algo que deseja;
echo "<br><br>";
$n2  = "anderson nunes";
echo "Aplicando substr(variavel, 0, 5 ) em: ".$n2." => ".substr($n2, 0, 5);
echo "<br>";
echo "Aplicando substr(variavel, 3, 7 ) em: ".$n2." => ".substr($n2,  3, 7);
echo "<br>";
echo "Aplicando substr(variavel, -2, 4 ) em: ".$n2." => ".substr($n2,-2, 4);
echo "<br><br>";
// fatia a string;
?>

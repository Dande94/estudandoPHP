<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$n1 = -8.4;
echo "aplicando a função abs() em: ".$n1.", resultado =>  ".abs($n1);
echo "<br><br>";
echo "Usando a função pi():".pi();
echo "<br><br>";
$n1 = 2.7;
echo "aplicando a função floor() em: ".$n1.", resultado =>  ".floor($n1);
echo "<br><br>";
$n1 = 2.7;
echo "aplicando a função ceil() em: ".$n1.", resultado =>  ".ceil($n1);
echo "<br><br>";
$n1 = 2.7;
echo "aplicando a função round() em: ".$n1.", resultado =>  ".round($n1);
echo "<br><br>";
$n1 = 2.3;
echo "aplicando a função round() em: ".$n1.", resultado =>  ".round($n1);
echo "<br><br>";
$n1 = pi();
echo "aplicando a função round(,2) com parametros de casa decimais em: ".$n1.", resultado =>  ".round($n1,2);
echo "<br><br>";
echo "Usando a função rand(3,9): ".rand(3,9);
echo "<br><br>";
$lista = [11,9,22,8,36];
echo "Usando a função max(".print_r($lista)."): ".max($lista);
echo "<br><br>";
echo "Usando a função min(".print_r($lista)."): ".min($lista);
echo "<br><br>";


?>

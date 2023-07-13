<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

$nome = 'Anderson';
$sobrenome = 'Nunes';
$idade = 29;

$nomeCompleto = $nome.$sobrenome;
$nomeCompleto2 = $nome . $sobrenome;
$nomeCompleto3 = "$nome  $sobrenome";
$nomeCompleto4 = $nome.' '. $sobrenome;
$nomeCompleto5 = '$nome  $sobrenome';//interpretação literal;
$frase= "$nome  $sobrenome tem $idade anos!";

echo $nomeCompleto;
echo "<br>";
echo "<br>";
echo $nomeCompleto2;
echo "<br>";
echo "<br>";
echo $nomeCompleto3;
echo "<br>";
echo "<br>";
echo $nomeCompleto4;
echo "<br>";
echo "<br>";
echo $nomeCompleto5;
echo "<br>";
echo "<br>";
echo $frase;
echo "<br>";
echo "<br>";

// _____________________________________

$x = 3;
$y = 4;
$z ='3';

echo $x.$y;//contatenou
echo "<br>";
echo $x+$y;//somou
echo "<br>";
echo $x.$z;//contatenou
echo "<br>";
echo $x+$z;//somou
echo "<br>";
echo "<br>";
// _____________________________________

$nome2 = 'Gisele';
$sobrenome2 = 'Fayel';

$contatenandoNome = $nome2;
$contatenandoNome .= $sobrenome2;
echo $contatenandoNome;


?>
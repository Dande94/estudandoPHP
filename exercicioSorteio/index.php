<h1>Sorteio</h1>
<?php
$lista = file('nomes.txt');
$nomes = array();
foreach ($lista as $nome) {
    array_push($nomes,$nome);
}
// print_r($nomes);
$sorteio = rand(0,19);
echo "<h3>O sorteado foi: ".$nomes[$sorteio]."</h3>";
?>
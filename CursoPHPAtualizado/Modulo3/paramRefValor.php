<?php
// Tempo de espera em segundos
$tempoEspera = 2;

// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");


function somar($n1, $n2, &$total){
    $total = $n1 + $n2;
}

$x = 3;
$y = 2;
$soma = 0;

somar($x,$y,$soma);

echo "TOTAl: ".$soma;

?>
<!--
     ao aplicar o '&' em terceiro parametro na função o return com o nome da variavel se torna obsoleto, o terceiro parametro setado na chamda na função espelha o parametro com '&' que agora age como escape da função, eles se referenciam;

     é obrigtório passar como parametro uma variavél quando se usa '&' no parametro da função(no recebimento);

-->
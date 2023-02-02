<?php
require "index.php";
if(isset($_POST['valor']) && !empty($_POST['valor'])){
    $valor = $_POST['valor'];
    $taxa = $_POST['taxa'];

    $taxado = $valor *($taxa / 100);

    $diferenca = $valor - $taxado;

    echo "<hr>";
    echo "<span>Valor do Produto: R$</span>".$valor;
    echo "<br>";
    echo "<span>Taxa de Imposto: </span>".$taxa."%";
    echo "<br>";
    echo "<span>Imposto: R$</span>".$taxado;
    echo "<br>";
    echo "<span>Produto: R$</span>".$diferenca;
    



}



?>
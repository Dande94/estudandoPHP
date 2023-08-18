<?php 
require_once 'calculadora.php';
$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->mul(3);
$calc->div(2);
$calc->add(0.5);
$total= $calc->total();

echo "Total: {$total}";
$calc->clear();

?>
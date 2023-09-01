<?php 
require_once 'autoloader.php';//usando a lógica na PSR-1, em arquivo declarar o metodo, e em outro implementar; aqui foi implementado;

$m = new MatematicaB();
echo $m->somar(20,15);

//$x = new Algo();//soulando erro de uma class que não existe
?>
<?php 
require_once "classe1.php";
require_once "classe2.php";

$a = new classe1\MinhaClasse();
$a = new classe2\MinhaClasse();

echo $a->testanto();
?>
<!-- 
    se faz necessário para separar por arquivo as classes;
 -->
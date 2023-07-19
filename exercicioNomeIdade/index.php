<?php
$tempoEspera = 2;
header("refresh: $tempoEspera");
//______________________________
require_once 'Pessoa.class.php';

$pessoa = new Pessoa('Anderson', '28/06/1933');
echo $pessoa->getNome()." tem ".$pessoa->getIdade()." anos.";

?>
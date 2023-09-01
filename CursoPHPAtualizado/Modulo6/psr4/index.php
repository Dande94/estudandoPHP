<?php 
require_once 'autoloader.php';

//invocando em metodo alternativo
//use \foto\Upload;
//$x = new Upload();

//invocando em metodo alternativo com apelido
use \foto\Upload as Salvar;
$x = new Salvar();

//invocando de maneira tradicional
$m = new \matematica\Basica();
echo $m->somar(20,15);


?>
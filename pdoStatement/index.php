<?php
require_once "usuario.php";//conectando a index.php a usuario.php
$u = new Usuario();//instanciando a classe 
$res = $u->selecionar(40);//enviando o id pelo argumento para retorna o respectivo registro no db
print_r($res);//printar as informações em formato de array;

?>
<?php
require_once "usuario.php";//conectando a index.php a usuario.php
//buscar registro:
$u = new Usuario();//instanciando a classe 
// $res = $u->selecionar(40);//enviando o id pelo argumento para retorna o respectivo registro no db
// print_r($res);//printar as informações em formato de array;

//inserir registros:
// $u->inserir("Anderson Nunes", "emaildeexemplo@eemplo.com","123");
//atualizar:
// $u->atualizar("Isabel Maria", "exemplo2@exemplo.com","456",47);
$u->excluir(47);
?>
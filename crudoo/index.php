<?php
include 'contato.class.php';

$contato = new Contato();//estabelecendo conexão com banco;

//adicionar
// $contato->adicionar('exemplo1@exemplo.com','Anderson Nunes');

//adicionar e atulizar (testeando o paraetro vazio);
// $contato->adicionar('exemplo2@exemplo.com');
// $contato->editar('Fulano de Tal','exemplo2@exemplo.com');

//busca do nome pelo email
// $nome = $contato->getNome('exemplo1@exemplo.com');
// echo "Nome: ".$nome;

//buscar todos os registros;
// $lista = $contato->getAll();
// print_r($lista);

//deletar 
// $contato->excluir('exemplo2@exemplo.com');
?>
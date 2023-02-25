<?php
require_once "usuario.php";
//adicionar
// $usuario = new Usuario();
// $usuario->setEmail("exemplo2@exemplo.com");
// $usuario->setSenha("123");
// $usuario->setNome("Beltranissímo de Tasso");
// $usuario->salvar();
// echo "<script>alert('Usuário salvo com sucesso!')</script>";
//-----
//pegar as informações;
$usuario = new Usuario(13);
// echo "O nome do usuario é: ".$usuario->getNome();
//atualizar
$usuario->setNome("Fulanissimo de Tal");
$usuario->salvar();
echo "<script>alert('Usuário atualizado com sucesso!')</script>";
?>
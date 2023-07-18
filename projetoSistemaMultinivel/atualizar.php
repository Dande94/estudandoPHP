<?php
session_start();
require_once 'conexaoBanco.php';
require_once 'funcoes.php';


$sql = "SELECT id FROM usuarios" ;
$sql = $pdo->query($sql);
$usuario=[];

if($sql->rowCount() > 0){
    $usuarios = $sql->fetchAll();
    foreach($usuarios as $chave=>$usuario ){
        $usuarios[$chave]['filhos'] = calcular_cadastro($usuario['id'],$limite);
    }
}
echo "<pre>";
print_r($usuarios);
echo "</pre>";

?>
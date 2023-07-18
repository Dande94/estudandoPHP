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

$sql = "SELECT * FROM patentes ORDER BY min DESC";
$sql = $pdo->query($sql);
$patentes = [];
if($sql->rowCount() > 0){
    $patentes = $sql->fetchAll();
}
foreach($usuarios as $usuario){
    foreach($patentes as $patente){
        if(intval($usuario['filhos']) >= intval($patente['min'])){
            $sql = "UPDATE usuarios SET patente = :patente WHERE id = :id";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":patente",$patente['id']);
            $sql->bindValue(":id", $usuario['id']);
            $sql->execute();

            break;
        }
    };
}

?>
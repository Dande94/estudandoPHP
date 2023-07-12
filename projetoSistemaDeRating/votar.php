<?php
require_once 'conexao.php';

if(!empty($_GET['id']) && !empty($_GET['voto'])){
    $id=intval($_GET['id']);
    $voto=intval($_GET['voto']);
    
    if($voto >= 1 &&  $voto <= 5){
        $sql =  "INSERT INTO votos SET id_filme = :id_filme, nota = :nota";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_filme", $id);
        $sql->bindValue(":nota", $voto);
        $sql->execute();
        
        $sql = "UPDATE filmes SET media = (
            SELECT ROUND((SUM(nota)/COUNT(*)),1) FROM votos WHERE votos.id_filme = filmes.id 
        ) WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        header("Location: index.php ");
        exit;
    }
}



?>
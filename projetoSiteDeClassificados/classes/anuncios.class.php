<?php
class Anuncios{

    public function getMeusAnuncios(){
        global $pdo;
        $array = [];
        $sql = "SELECT * FROM anuncio WHERE id_usuario = :id_usuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
         return $array;
    }
}
?>
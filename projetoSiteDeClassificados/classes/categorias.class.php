<?php
class Categorias{
    public function getLista(){
        $array = [];
        global $pdo;
        $sql = "SELECT * FROM categoria";
        $sql = $pdo->query($sql);
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
            return $array;
        }
        return $array;
    }
}
?>
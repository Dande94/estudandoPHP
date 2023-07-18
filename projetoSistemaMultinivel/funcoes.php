<?php
    function listar($id, $limite){
        global $pdo;
        $lista = [];
        $sql = "SELECT * FROM usuarios WHERE id_pai = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql -> rowCount()){
            $lista = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($lista as $chave=>$usuario){
                $lista[$chave]['filhos'] = [];
                if($limite > 0){
                    $lista[$chave]['filhos'] = listar($usuario['id'], $limite-1);
                }
            }
    }
    return $lista;
}

function exibir($array){
    echo "<ul>";
    foreach($array as $usuario){
        echo "<li>";
            echo  ucwords($usuario['nome'])." - (".count($usuario['filhos'])." cadastros diretos)";
                if(count($usuario['filhos']) > 0 ){
                    exibir($usuario['filhos']);
                }
        echo "</li>";
    }
    echo "</ul>";
};


?>
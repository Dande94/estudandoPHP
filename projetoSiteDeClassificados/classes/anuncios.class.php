<?php
class Anuncios{

    public function getMeusAnuncios(){
        global $pdo;
        $array = [];
        $sql = "SELECT *,
        (select anuncios_imagens.url from anuncios_imagens where anuncios_imagens.id_anuncios = anuncio.id limit 1) as url 
        FROM anuncio WHERE id_usuario = :id_usuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_usuario", $_SESSION['cLogin']);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
         return $array;
    }

    public function getAnuncio($id){
        $array = array ();
        global $pdo;
        $sql = "SELECT * FROM anuncio WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();
        }
        return $array;

    }

    public function addAnuncio($catAnuncio, $tituloAnuncio, $descAnuncio, $precoAnuncio, $estadoAnuncio){
        global $pdo;
        $sql = "INSERT INTO anuncio (id_usuario,id_categoria, titulo, descricao, preco, estado) VALUES (:idUsuario , :catAnuncio, :tituloAnuncio, :descAnuncio, :precoAnuncio, :estadoAnuncio)";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":idUsuario",$_SESSION['cLogin']);
        $sql->bindValue(":catAnuncio",$catAnuncio);
        $sql->bindValue(":tituloAnuncio",$tituloAnuncio);
        $sql->bindValue(":descAnuncio",$descAnuncio);
        $sql->bindValue(":precoAnuncio",$precoAnuncio);
        $sql->bindValue(":estadoAnuncio",$estadoAnuncio);
        $sql->execute();
    }

    public function excluirAnuncio($id){
        global $pdo;
        $sql = "DELETE FROM anuncios_imagens WHERE id_anuncios = :id_anuncio";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id_anuncio", $id);
        $sql->execute();

        $sql = "DELETE FROM anuncio WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }

    public function editAnuncio($catAnuncio, $tituloAnuncio, $descAnuncio, $precoAnuncio, $estadoAnuncio, $fotos,$id){
        global $pdo;
        $sql = "UPDATE anuncio SET
        id_categoria = :catAnuncio,
        titulo =:tituloAnuncio,
        descricao = :descAnuncio,
        preco = :precoAnuncio,
        estado = :estadoAnuncio
        WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":catAnuncio",$catAnuncio);
        $sql->bindValue(":tituloAnuncio",$tituloAnuncio);
        $sql->bindValue(":descAnuncio",$descAnuncio);
        $sql->bindValue(":precoAnuncio",$precoAnuncio);
        $sql->bindValue(":estadoAnuncio",$estadoAnuncio);
        $sql->bindValue(":id",$id);
        $sql->execute();

        if(count($fotos) > 0){//verifica se há dados no array de fotos;

            for($q = 0; $q < count($fotos); $q++){//percorre o array de fotos;
                $tipo =  $fotos['type'][$q];
                if(in_array($tipo,array('image/jpeg','image/png'))){//verifica se as fotos selecionadas tem a exttenção jpeg e png, é possivel ver essa informação ao aplicar um print_r() no array onde estão guardadas os dados das fotos;

                    $tmpname = md5(time().rand(0,9999)).'jpg';//gera um nome aleatório pros arquivos

                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/anuncios/'.$tmpname);//onde salvar as imagens

                };
            }
        }
    }
}
?>
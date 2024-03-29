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
        $sql = "SELECT *,
        (select categoria.nome from categoria where categoria.id = anuncio.id_categoria) as categoria,
        (select usuarios.telefone from usuarios where usuarios.id = anuncio.id_usuario) as telefone,
        (select usuarios.nome from usuarios where usuarios.id = anuncio.id_usuario) as nome
        FROM anuncio WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array = $sql->fetch();

            $array['fotos'] = [];   

            $sql = "SELECT id,url FROM anuncios_imagens WHERE id_anuncios = :id_anuncios";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(":id_anuncios", $id);
            $sql->execute();

            if($sql->rowCount()>0){
                $array['fotos'] = $sql->fetchAll();
            }
        }
        return $array;

    }
    public function getTotalAnuncios($filtros){
        global $pdo;

        $filtrostring = ['1=1'];
        if(!empty($filtros['categoria'])){
            $filtrostring[]='anuncio.id_categoria = :id_categoria';
        }
        if(!empty($filtros['preco'])){
            $filtrostring[]='anuncio.preco BETWEEN :preco1 AND :preco2';
        }
        if(!empty($filtros['estado'])){
            $filtrostring[]='anuncio.estado = :estado';
        }

        $sql = "SELECT COUNT(*) as c FROM anuncio WHERE ".implode(' AND ', $filtrostring);
        $sql = $pdo->prepare($sql);

        if(!empty($filtros['categoria'])){
            $sql->bindValue(":id_categoria", $filtros['categoria']);
        }
        if(!empty($filtros['preco'])){
            $preco = explode('-', $filtros['preco']);
            $sql->bindValue(":preco1", $preco[0]);
            $sql->bindValue(":preco2", $preco[1]);
        }
        if(!empty($filtros['estado'])){
            $sql->bindValue(":estado", $filtros['estado']);
        }
        
        $sql->execute();
        $row = $sql->fetch();
        return $row['c'];
    }
    public function getUltimosAnuncios($page, $perPage,$filtros){
        global $pdo;
        //paginação
        $offset = ($page - 1) * $perPage;
        //fim-paginação



        $array = [];

        $filtrostring = ['1=1'];

        if(!empty($filtros['categoria'])){
            $filtrostring[]='anuncio.id_categoria = :id_categoria';
        }
        if(!empty($filtros['preco'])){
            $filtrostring[]='anuncio.preco BETWEEN :preco1 AND :preco2';
        }
        if(!empty($filtros['estado'])){
            $filtrostring[]='anuncio.estado = :estado';
        }

        $sql = "SELECT *,
        (select anuncios_imagens.url from anuncios_imagens where anuncios_imagens.id_anuncios = anuncio.id limit 1) as url,
        (select categoria.nome from categoria where categoria.id = anuncio.id_categoria) as categoria
        FROM anuncio WHERE ".implode(' AND ', $filtrostring)." ORDER BY id DESC LIMIT $offset,$perPage";
        $sql = $pdo->prepare($sql);

        if(!empty($filtros['categoria'])){
            $sql->bindValue(":id_categoria", $filtros['categoria']);
        }
        if(!empty($filtros['preco'])){
            $preco = explode('-', $filtros['preco']);
            $sql->bindValue(":preco1", $preco[0]);
            $sql->bindValue(":preco2", $preco[1]);
        }
        if(!empty($filtros['estado'])){
            $sql->bindValue(":estado", $filtros['estado']);
        }

        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
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

        //savar imagens no servidor
        if(count($fotos) > 0){//verifica se há dados no array de fotos;

            for($q = 0; $q < count($fotos['tmp_name']); $q++){//percorre o array de fotos;
                $tipo =  $fotos['type'][$q];
                if(in_array($tipo,array('image/jpeg','image/png'))){//verifica se as fotos selecionadas tem a exttenção jpeg e png, é possivel ver essa informação ao aplicar um print_r() no array onde estão guardadas os dados das fotos;

                    $tmpname = md5(time().rand(0,9999)).'.jpg';//gera um nome aleatório pros arquivos

                    move_uploaded_file($fotos['tmp_name'][$q], 'assets/images/anuncios/'.$tmpname);//onde salvar as imagens;

                    list($width_orig, $height_orig) = getimagesize('assets/images/anuncios/'.$tmpname);//capturando as dimensões da imagens;

                    $ratio = $width_orig / $height_orig;//calculo de proporçãode imagem *lembrar de analisar essa linha de código pa entender melhor o que tá aontecendo*;
                    $width = 500;
                    $height = 500;

                    if($width/$height > $ratio){//comparando as propocionalidades entre a imagem inputada com a dimensões desejadas;
                        $width = $height*$ratio;// caso true, então a largura será altura vezes a proporção do tamanho original das imagens
                    }else{
                        $height = $width/$ratio;// caso false, então a altura será largura dividido a proporção do tamanho original das imagens
                    }

                    $img = imagecreatetruecolor($width, $height);
                    if($tipo == 'image/jpeg'){
                        $origi = imagecreatefromjpeg('assets/images/anuncios/'.$tmpname);
                    }elseif($tipo == 'image/png'){
                        $origi = imagecreatefrompng('assets/images/anuncios/'.$tmpname);
                    }

                    imagecopyresampled($img, $origi,0,0,0,0,$width,$height,$width_orig,$height_orig);
                    imagejpeg($img, 'assets/images/anuncios/'.$tmpname,80);

                    //salvar no banco de dados
                    $sql = "INSERT INTO anuncios_imagens SET id_anuncios = :id_anuncios, url = :url";
                    $sql = $pdo->prepare($sql);
                    $sql->bindValue(":id_anuncios", $id);
                    $sql->bindValue(":url", $tmpname);
                    $sql->execute();

                };
            }
        }
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

    public function excluirFoto($id){
        global $pdo;

        $id_anuncio = 0;

        $sql = "SELECT id_anuncios FROM anuncios_imagens WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $row = $sql->fetch();
            $id_anuncio = $row['id_anuncios'];
        }

        $sql = "DELETE FROM anuncios_imagens WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();

        return $id_anuncio;
    }
}
?>
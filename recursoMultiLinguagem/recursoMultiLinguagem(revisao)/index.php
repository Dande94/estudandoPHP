<?php 
session_start();//iniciar uma sessão pois e onde ficará armazenado a linguagem que estará sendo usada;

// Tempo de espera em segundos
$tempoEspera = 3;
// Redirecionar para a mesma página após o tempo de espera
header("refresh: $tempoEspera");

if(!empty($_GET['lang'])){//verificando se lang foi enviado e não foi enviado;
    $_SESSION['lang'] = $_GET['lang'];//atribuiindo a lang enviada a SESSION, e assim a mesma aplicará o idioma ao sistema;
}

require "conexaoBanco.php";
require 'Language.class.php';
$lang = new Language();
?>
<a href="index.php?lang=en">English</a>
<a href="index.php?lang=pt-br">Português</a>
<a href="index.php?lang=es">Español</a>
<br>
<hr>
<p>Linguagem Definida: <?php echo $lang->getLanguage(); ?></p>
<hr>
<!-- removido o echo do php dentro dos buttons pois o mesmo vem do processamento da classe Language -->
<button><?php $lang->get('BUY')?></button>
<button><?php $lang->get('LOGOUT')?></button>
<button><?php $lang->get('NAME')?></button>
<button><?php $lang->get('Piso')?></button><!-- exemplo de palavra que não existe no dicionário, para exemplificar o return true e false onde caso a palavra não exista no dicionário a mesma é retornada e não é submetida ao 'echo'  -->
<p>Categoria: <?php $lang->get('CATEGORIA_PHOTO')?></p>
<p>Categoria: <?php $lang->get('CATEGORIA_CLOTHES')?></p>

<hr>

<?php
    $sql = "SELECT id,(SELECT valor FROM lang WHERE lang.lang = :lang AND lang.nome = categorias.lang_item) AS nome FROM categorias";//associando tabelas
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':lang', $lang->getLanguage());
    $sql->execute();
    
    //listagem automatizada dos itens presentes em categoria
    if($sql->rowCount() > 0){
        foreach($sql->fetchAll() as $categoria){
            echo '<p>Categoria: '.$categoria['nome'].'</p>';
        }
    }
?>

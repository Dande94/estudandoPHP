<?php
session_start();

require_once "conexao.php";
require_once "classes/usuarios.class.php";
require_once "classes/documentos.class.php";

if(!isset($_SESSION['logado'])){//verifica se o usuario está logado para ter acesso a página index
    header("Location: login.php");//se não tiver envia ele pra página de login;
    exit;//pra encerrar a execução do restante do código;
}

$usuarios = new Usuario($pdo);
$usuarios->setUsuario($_SESSION['logado']);

$documentos = new Documentos($pdo);
$lista =  $documentos->getDocumentos();

?>
<h3>Sistema</h3>
<?php if($usuarios->temPermissao('ADD')):?>
<a href="">Adicionar documento</a>
<?php endif;?>

<br>
<br>
<table border="1" width="100%">
    <thead>
        <th>Nome do Arquivo</th>
        <th>Ações</th>
    </thead>
    <tbody>
        <?php foreach($lista as $item): ?>
            <tr>
                <td> <?php echo $item['titulo']; //aqui o professor usa utf8_encode(porém a função já foi depreciada) ?> </td>
                <td>
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
                </td>
            </tr>


        <?php endforeach; ?>
    </tbody>

</table>


<!-- 
    printar permissões do usuario:
    permissões:<?php // print_r($usuarios->getPermissoes()); ?>
 -->


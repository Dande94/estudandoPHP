<?php 
require_once "config.php";

require_once 'dao/UsuarioDaoMysql.php';
$usuarioDao = new UsuarioDaoMysql($pdo);
$usuario = new Usuario;//aqui o professor seta $usuario como false, porém fica expressando incompatibilidade de codigo na IDE, então troquei  para uma instância, aparentemente, não houve nenhum problema;

$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if($id){
    $usuario = $usuarioDao->findById($id);
}
if($usuario === false){
    header('Location: index.php');
    exit;
}



?>
<h1>Editar Usuário</h1>
<form action="editar_action.php" method="post">
    <input type="hidden" name="id_exemplo" value="<?= $usuario->getId();?>">
    <label for="">
        Nome: <br>
        <input type="text" name="name_exemplo" id="" value="<?= $usuario->getNome();?>">
    </label>
    <br><br>
    <label for="">
        email: <br>
        <input type="email" name="email_exemplo" id="" value="<?= $usuario->getEmail();?>">
    </label>
    <br><br>
    <input type="submit" value="Salvar">
</form>
<?php 
require_once "config.php";
$info = [];
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

if($id){
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id",$id);
    $sql->execute();
    if($sql->rowCount() > 0){
        $info = $sql->fetch(PDO::FETCH_ASSOC);
    }
}else{
    header('Location: index.php');
    exit;
}



?>
<h1>Editar Usuário</h1>
<form action="editar_action.php" method="post">
    <input type="hidden" name="id_exemplo" value="<?= $info['id'] ?>">
    <label for="">
        Nome: <br>
        <input type="text" name="name_exemplo" id="" value="<?= $info['nome'] ?>">
    </label>
    <br><br>
    <label for="">
        email: <br>
        <input type="email" name="email_exemplo" id="" value="<?= $info['email']?>">
    </label>
    <br><br>
    <input type="submit" value="Salvar">
</form>
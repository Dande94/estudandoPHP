<?php 
require_once "config.php";
$id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);
if($id){
    $sql = "DELETE FROM usuarios WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(":id", $id);
    $sql->execute();
}
header("Location: index.php");
exit;
?>
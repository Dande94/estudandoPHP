<?php
class Tarefa{
    private $pdo;
    public function __construct()
    {
        // require_once '../config/conexaoBanco.php';
        require_once __DIR__ . '/../config/conexaoBanco.php';
        $this->pdo = new PDO($dsn,$dbuser,$dbpass);
    }
    //registrar tarefa
    public function registrarTarefa($tarefa, $id_user){
        $sql = "INSERT INTO tarefas (id_user, tarefa) VALUES(:id_user, :tarefa)";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->bindValue(":tarefa", $tarefa);
        $sql->execute();
    }
    //listar tarefas
    public function listarTarefas($id_user){
        $sql = "SELECT * FROM tarefas WHERE id_user = :id_user";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id_user", $id_user);
        $sql->execute();
        if($sql->rowCount() > 0){
           return $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{
            echo "Não há tarefas!";
        }

    }
    //excluir tarefa


}
?>
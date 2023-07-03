<?php
class Usuario{
    private $pdo;
    private $id;
    private $permissoes;

    public function __construct($pdo)
    {
        $this->pdo =$pdo;
    } 
    public function fazerLogin($email,$senha){
        $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", $senha);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql = $sql->fetch();
            $_SESSION['logado'] = $sql['id'];//criada a sessão, depois que validou-se que há a existencia da conta do usuário;
            return true;
        }
            return false;//caso não encontre o registro, retornará false;
    }
    public function setUsuario($id){
        $this->id = $id;
        $sql = "SELECT * FROM usuarios WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $sql= $sql->fetch();

            $this->permissoes = explode(",",$sql['permissoes']);//captura os dados da coluna permissao  do bando de dados e transforma em um array com a explode; e salva na variavel permissoes;
        }
    }
}
?>
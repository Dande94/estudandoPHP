<?php
class Usuario{
    private $pdo;
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
            $_SESSION['logado'] = $sql['id'];
        }
    }
}
?>
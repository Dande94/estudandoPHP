<?php

class Usuario{

    private $db;//variavél privada;

    public function __construct(){
        //try catch, para tratar conexão e falha de conexão;
        try{
            //conexão com op banco de dados via PDO;
            $this->db = new PDO("mysql:dbname=blog3;host=localhost","root","");
        }catch(PDOException $e){
            echo "FALHA: ".$e->getMessage();
        }
    }

    public function selecionar($id){
        //o comando:
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        //tratamento da variavel:
        $sql->bindValue(":id", $id);
        //executar o comando
        $sql->execute();

        //construção do resultado;
        $array = array();//declarando array vazio para receber resultado da busca;
        if($sql->rowCount() > 0){
            $array = $sql->fetch();//o retorno volta como um array;
        }
        return $array;//retornando o array para o index;
    }

    public function inserir($nome,$email,$senha){
        //comando de inserção:
        $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");

        //comando de tratamento das informações recebidas;
        //o bindValue seta o valor da vairavel ao apelidona query, o bindParam associa a variavel ao apelido, se posterioemente a varivel trocar de valor o apelido tambem troca, diferente o bindValue que seta o valor, e ele que fica alocado no apelido;
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindValue(":senha", sha1($senha));//aqui precisa ser associado ao valor por estar passando um SHA1
        //comando de execução:
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id){
        //comando:
        $sql= $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE  id = ?");
        //tratamento dos dados recebido diretamente no execute, lembra de manter as a ordem da linha de comando igual a declaraão das variveis;
        $sql->execute(array($nome,$email,sha1($senha),$id));//array com as informações;
    }
}

?>
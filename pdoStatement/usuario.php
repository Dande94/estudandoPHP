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
        //o comando de procura:
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        //tratamento da variavel:
        $sql->bindValue(":id", $id);
        //executar o comando
        $sql->execute();

        //construção do resultado;
        $array = array();//declarando array vazio para receber resultado da busca;
        if($sql->rowCount() > 0){
            $array = $sql->fetch();//o retorno volta como um array(esse array tem estrutura de objeto); foi usado fetch e não fetchAll, pois está se aguardando apenas 1 resultado;
        }
        return $array;//retornando o array para o index;
    }

    public function inserir($nome,$email,$senha){
        //comando de inserção:
        $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");

        //comando de tratamento das informações recebidas;
        //o bindValue seta o valor da vairavel ao apelido na query, o bindParam associa a variavel ao apelido, se posterioemente a varivel trocar de valor o apelido tambem troca, diferente do bindValue que seta o valor, e ele que fica alocado no apelido;
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindValue(":senha", sha1($senha));//aqui precisa ser associado ao valor por estar passando um SHA1
        //comando de execução:
        $sql->execute();
    }

    public function atualizar($nome, $email, $senha, $id){
        //comando de update:
        $sql= $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? WHERE  id = ?");
        //tratamento dos dados recebido diretamente no execute, lembra de manter as a ordem da linha de comando igual a declaraão das variveis;
        $sql->execute(array($nome,$email,sha1($senha),$id));//array com as informações;
    }

    public function excluir($id){
        //comando de delete:
        $sql = $this->db->prepare("DELETE FROM usuarios WHERE id =?");
        //tratamento das informações recebidas
        $sql->bindValue(1,$id);//aqui o '1' representa o primeiro '?', caso venha ater mais de um '?' vai seguindo a sequência de acordo com a varivel desejada a ser setada ali;

        //executar comando
        $sql->execute();
    }
}
//nessa aula basicamente foi mostrado todos os tipos de construção para CRUD com o PDO Statement;


?>
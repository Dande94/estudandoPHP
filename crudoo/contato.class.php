<?php
class Contato{

    private $pdo;//controle de acesso, ao aplicar o private, o $pdo  será apena acessivel dentro da classe Contato;

    public function __construct(){
        //ao usar o '$this' indica que estou usando algo que está dentro da classe;
        $this->pdo = new PDO("mysql:dbname=crudoo;host=127.0.0.1","root","");
    }

    //creat: nesse sistema o email é obrigatório e o nome é opcional(éa regra de negócio desse sistema)
    public function adicionar($email,$nome = ''){//ao passar os parametros 1º os obrigatórios e depois os opcionais, e ao setar ' $nome='' 'a váriavel com aspas informo para a função que aquela variavel é opcional e que o valor dentro das aspas é o valor padrão caso receba aquela váriavel vazia;
        //1º passo: verificar se o email já existe no sistema;
        //2º passo: adicionar;

        if($this->existeEmail($email)==false){//esse email não pode existir para que possa adicionar ele, por isso que se espera um false; 
            $sql = "INSERT INTO contatos SET nome = :nome, email = :email";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':email', $email);
            $sql->execute();
            return true;
        }else{
            return false;//o email não foi adicionado pq ele já existe no sistema;
        }
    }
    //read:
    //função getNome está obsoleta;
    public function getNome($email){//usarei o email pra pegar o nome pois o email é obrigatório ter o nome não, então blinda o sistema de busca;
        $sql = "SELECT nome FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
        
        if($sql->rowCount()>0){//caso a busca retorne mais de 0 zero resultados
            $info = $sql->fetch();//traga essa busca pra um array(tipo um objeto);
            return $info['nome'];//acesse nome dentro do array e retorne ele;
        }else{
            return '';//caso a busca de 0 linhas retorne'vazio';
        }
    }
    
    public function getInfo($id){
        $sql = "SELECT * FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id); 
        $sql->execute();

        if($sql->rowCount()>0){
            return $sql->fetch();
        }else{
            return array();
        }

    }

    public function getAll(){//pegar a lista de todos os contatos
        $sql = "SELECT * FROM contatos";//trazer tudo da tabela contatos;
        $sql = $this->pdo->query($sql);//como não tem parametro para ser tratato, executa a query sem tratamento;

        if($sql->rowCount()>0){//caso tenha ais de 0 contatos
            return $sql->fetchAll();//passar tudo o que encontrou para dentro de um array
        }else{
            return array();//caso não encontre algo, retorne um array vazio
        }

    }

    
    //update
    public function editarTotal($email,$nome, $id){
        if($this->existeEmail($email) == false){//se email existir não fará a edição(update), pois não pode haver email repetidos no sistema;
            $sql = "UPDATE contatos SET nome = :nome, email = :email WHERE id = :id";
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':id', $id);
            $sql->execute();
            return true;
        }else{
            return false;
        }
    }
    //update -> email travado
    public function editar($nome, $id){
        $sql = "UPDATE contatos SET nome = :nome WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':nome', $nome);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    //delete

    public function excluirPeloId($id){
        $sql = "DELETE FROM contatos WHERE id = :id";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }
    public function excluirPeloEmail($email){
        $sql = "DELETE FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();
    }

    //verificador (função auxiliar)
    private function existeEmail($email){//verificar se aquele email existe no sistema
        $sql = "SELECT * FROM contatos WHERE email = :email";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if($sql->rowCount() > 0){//verificação simples para ver se há o email no banco de dados para pode liberar as função de adicionar, editar, ler e excluir;
            return true;//se existir
        }else{
            return false;//senão existir;
        }
    }
}


?>


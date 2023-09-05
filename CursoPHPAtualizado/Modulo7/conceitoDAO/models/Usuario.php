<?php
class Usuario{
    private $id;
    private $nome;
    private $email;

    public function getId(){
        return $this->id;
    }
    public function setId($i){
         $this->id = trim($i);//aplicando metdo trim para que caso futuramente resolva usar letras, hash e outras idetificadores para o id, e assim tira-se o excesso de espaços;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNome($n){
         $this->nome = ucwords(trim($n));//aplicando ucwords(), para deixa o nome em padrão de todas as prmeiras do nome em maiusculas;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($e){
         $this->email = strtolower(trim($e));//aplicando strtolower() deixando todas as letras minusculas;
    }

}

//essa implementação do DAO, não é obrigatória porém profissionaliza o sistema;

interface UsuarioDAO{//aplicação do conceito DAO, toda classe que quiser fazer implementação de banco de dados deverá seguir um padrão, regido pela interface DAO;

    public function add(Usuario $u);//recebe um objeto da classe Usuario;

    public function findAll();//buscar todos os registro;

    public function findById($id);//buscar registro pelo Id;
     
    public function findByEmail($email);//buscar registro pelo email;

    public function update(Usuario $u);//recebe um objeto da classe Usuario;
    
    public function delete($id);//deletar pelo Id

}
?>
<?php

class Post{
    public $titulo;
    private $data;
    private $corpo;
    private $comentarios;
    private $qtComentarios;

    public function __construct($t,$c){//construtor, raramente não está publico;
        //chamando as funções e usando os parametro para construir o corpo da postagem;
        $this->setTitulo($t);
        $this->setCorpo($c);
    }
    
    //getters - está "pegando" o valor armazenado nas variaveís, para poder manipular;
    public function getTitulo(){
        return $this->titulo;
    }
    public function getCorpo(){
        return $this->corpo;
    }

    public function getQuantosComentarios(){
        return $this->qtComentarios;//traz a quantidade de comentários; que está sendo contada de dentro da addComentarios;
    }

    
    //setters -. nesse caso o setter tá sendo usado para armazenar um valor nas variáveis 
    public function setTitulo($t){
        if(strlen($t) > 5 && is_string($t)){
            $this->titulo = $t;
        }
    }
    public function setCorpo($c){
        if(strlen($c) > 5 && is_string($c)){
            $this->corpo = $c;
        }
    }

    public function addComentarios($msg){
        $this->comentarios[]=$msg;//ao adicionar '[]' no final da variavelcomentários, meio que adiciona chaves de array nesse, mito parecido com um push;
        $this->contarComentarios();//chamada da função 
    }

    private function contarComentarios(){//esta privado pq sode rodar dentro do próprio objeto
        $this->qtComentarios = count($this->comentarios);//irá contar quantos elementos tem dentro do array comtários e será atribuido ao qtComtarios;
    }
}

//nesse caso a manipulação se dá através da exibição do qu está armazenado;
$post = new Post("Titulo Qualquer","Corpo da minha postagem");

$post->addComentarios("Teste");
$post->addComentarios("Teste 2");
$post->addComentarios("Teste 3");
$post->addComentarios("Teste 4");


echo"Titulo: ".$post->getTitulo();
echo "<br>";
echo"Postagem: ".$post->getCorpo();
echo "<br>";
echo"comentários: ".$post->getQuantosComentarios();



?>
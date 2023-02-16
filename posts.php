<?php

class Post{
    public $titulo;
    private $data;
    private $corpo;
    private $comentarios;

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
}

//nesse caso a manipulação se dá através da exibição do qu está armazenado;
$post = new Post("Titulo Qualquer","Corpo da minha postagem");
echo"Titulo: ".$post->getTitulo();
echo "<br>";
echo"Postagem: ".$post->getCorpo();



?>
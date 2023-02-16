<?php

class Post{
    public $titulo;
    private $data;
    private $corpo;
    private $comentarios;

    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($t){
        if(strlen($t) > 5 && is_string($t)){
            $this->titulo = $t;
        }
    }
}


$post = new Post();
//$post->setTitulo(array());//não passa na valdação
// $post->setTitulo("Titulo da postagem");//alterar 
// echo"Titulo: ".$post->getTitulo();//pegar o valor armazenado

?>
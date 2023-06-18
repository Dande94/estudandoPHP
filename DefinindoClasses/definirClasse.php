<?php
//como definir uma classe

// ►Modificadores de acesso(em metodos e atributos;) -
// ►►Public - pode ser acessado por qualquer classe do sistema;
// ►►►Protected - pode ser acessado desde que ele seja herdado, trasmitido por herança;
// ►►►►Package(default) - só pode ser acessado por classes do mesmo pacote;
// ►►►►►Private - o mais restrito, só pode ser acessado de dentro da própria classe;

class Pessoa{

    public function trocarSenha(){
        //conectarBanco();
        //verificações
        //trocar a senha

    }

    private function conectarBanco(){

    }
}

?>
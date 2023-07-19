<?php

class Pessoa{
    private $nome;
    private $dt_nasc;

    public function __construct($n,$i)
    {   
        if(is_string($n)){
            $this->nome = $n;
        }
        if(is_string($i)){
            $this->dt_nasc = $i;
        }
    }

      public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
            // Obtém o ano atual
        $ano_atual = date('Y');

        // Extrai o ano de nascimento da data fornecida
        list($dia, $mes, $ano_nasc) = explode('/', $this->dt_nasc);

        // Calcula a idade
        $idade = $ano_atual - $ano_nasc;

        // Verifica se o aniversário deste ano ainda não ocorreu
        $mes_atual = date('n');
        $dia_atual = date('j');
        if ($mes_atual < $mes || ($mes_atual == $mes && $dia_atual < $dia)) {
            $idade--;
        }

        // Exibe a idade
        return $idade;
    }
}

?>
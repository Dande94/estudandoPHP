<?php

class Reservas{

    private $pdo;

    public function __construct($pdo)//salvando a conexão dentro da classe;
    {
        $this->pdo = $pdo;
    }

    public function getReservas(){//irá listar as reservas que tem no DB;
        $array = array(); //normalmente não declaro array vazia se logo vai ser preenchida, mas no projeto caso não há registro retorno um array vazio;

        $sql = "SELECT * FROM reservas";
        $sql = $this->pdo->query($sql);

        if($sql->rowCount() > 0){//se tiver registro preencherá o array(a função que faz isso e fetchAll())
            $array = $sql->fetchAll();
        }//se não tiver nada retorna vázio;

        return $array;//apenas retorna o array, vazio ou não;

    }

    public function veirficarDisponibilidade($carro, $data_inicio, $data_fim){
        $sql = 
        "SELECT *
        FROM reservas
        WHERE id_carro = :carro
        AND(NOT( data_inicio > :data_fim OR data_fim < :data_inicio ))";
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(":carro", $carro);
        $sql->bindValue(":data_inicio", $data_inicio);
        $sql->bindValue(":data_fim", $data_fim);
        $sql->execute();

        if($sql->rowCount() > 0){//fator de decisão do 'if' lá em 'reservar.php' 
            return false;
        }else{
            return true;
        }
    }
    public function reservar($carro, $data_inicio, $data_fim,$nome_pessoa){
        // a versão 'set' de para inserir dados no DB só permitido em MySQL, se não deve ser usado o de dois estágio primeiro 'campos' depois 'values';
        $sql = "INSERT INTO reservas (id_carro, data_inicio, data_fim, pessoa) VALUES (:carro, :data_inicio, :data_fim, :nome_pessoa)";
        $sql= $this->pdo->prepare($sql);
        $sql->bindValue(":carro", $carro);
        $sql->bindValue(":data_inicio", $data_inicio);
        $sql->bindValue(":data_fim", $data_fim);
        $sql->bindValue(":nome_pessoa", $nome_pessoa);
        $sql->execute();
    }
    
}

?>
<!-- 
    -- não pode haver um registro de reserva feita pelo usuarios, que a data de inicio(no DB) seja maior que a data fim(solicitada OU a data fim(no DB) seja menor que a data de inicio(solicitada);
     NOT( data_inicio > :data_fim OR data_fim < :data_inicio )
     
     A expressão NOT( data_inicio > :data_fim OR data_fim < :data_inicio ) pode ser dividida em duas partes:

    *data_inicio > :data_fim - verifica se a data de início da primeira faixa está depois da data de fim da segunda faixa.

    *data_fim < :data_inicio - verifica se a data de fim da primeira faixa está antes da data de início da segunda faixa.

    Por fim, a cláusula 'NOT' é usada para negar a condição, ou seja, o resultado será verdadeiro apenas se as duas partes forem falsas, o que indica que as duas faixas de datas se sobrepõem.

    Essa cláusula de condição é comumente usada em consultas SQL para filtrar resultados com base em intervalos de datas. Por exemplo, você pode usá-la em uma consulta para obter todos os registros cujas datas de início e fim se sobrepõem a um determinado intervalo de datas.
 -->
<?php

// //pdo = conexão com banco de dados;
// $dsn = "mysql:dbname=blog;host=127.0.0.1";//primeiro o tipo de banco de dados que deseja se conecta, depois o nome do banco especifico , e depois o ip do servidor '127.0.0.1' ou 'localhost';
// $dbuser = "root";//usuario de acesso;(padrão do xampp)
// $dbpass = "";//senha de acesso;(padrão do xampp), nesse caso senha e é vazia, mas em alguns casos pode ser 'root';

// //-----------------------------------------------------------------------------------------------------------
// //iniciar a lib PDO;
// try{//usando o 'try' para iniciar uma aplicação que externa ao arquivo nesse caso o banco de dados;
//     $pdo = new PDO($dsn, $dbuser, $dbpass);// inicia a classe(objeto) PDO que usa as variaveis de conexão como parametro;
//     //echo "Conexão estabelecida com sucesso!";// mensagem de sucesso;

//     //$sql = "SELECT * FROM posts WHERE autor LIKE '%Nunes%'";//query de requisição para o banco de dados; com filtro de se tiver 'Nunes' é válido;
//     //--
//     //$sql="INSERT INTO `posts`(`titulo`, `data_criada`, `corpo`, `autor`) VALUES ('Titulo de Inserção2','2022-06-29 02:01:23','Um texto Incrivel 2','Teresinha Silva')" ;//inserindo um registro no bando de dados;
//     //--
//    // $titulo="Titulo de Inserção3";
//    // $corpo = "Um texto Incrivel 3";
//    // $autor= "Edson Cavilha";
//    // $sql="INSERT INTO `posts`(`titulo`, `data_criada`, `corpo`, `autor`) VALUES ('$titulo','2022-06-30 12:06:23','$corpo','$autor')" ;//inserindo um registro no bando de dados com variaveis
//    //echo "Usuário Inserido ".$pdo->lastInsertId();//trás o Id do ultimo insert feito;
//     //--
//     //$sql = "UPDATE `posts` SET `autor`='Ricardo B dos Santos' WHERE id = 5";//atualizando dos dados do banco de dados;
//     //echo "Dados alterados com sucesso";
//     //--
//     $sql = "DELETE FROM posts WHERE id = 7";//cuidado para não esquecer de especificar onde ocorrerá o delete;
//     //echo "autor deletado com sucesso";
    
//     //--
//     $pdo->query($sql);//como não será retornado nada, pode apenas executa o pdo // a variavél recebe o mesmo nome nas duas porque, funciona como uma economia de armazanagem, onde antes guarda apenas a query SQL agora passa tambem a armazenar a query e ainda se torna uma  classe do metodo PDO;
//     //$sql = $pdo->query($sql);//rescrevendo o comando do banco de dados com a conexão com o banco de dados;caso necessi retorna algo;


//     // if($sql->rowCount() > 0){//se a pesquisa tiver mais de 0 linhas a condição foi satisfeita;
//     //     foreach($sql->fetchAll() as $autor) {//fetchAll() irá pegar os resultados dentro de $sql e trasformrá em um array,o identifacador de desse array será '$autor';
//     //         echo "Nome: ".$autor["autor"]." - ".$autor["titulo"]."<br>";//estrutura do resultados;
//     //     }
//     // }else{//caso a pesquisa retorne 0 linhas;
//     //     echo "Não autores Cadastrados!";//expressãodo erro;
//     // };


// }catch(PDOException $e){//caso falhe, entrará em 'catch' que irá expressar o erro; a varivel '$e' terá nela a PDOException(ou seja qual o erro que ocorreu);
//     echo "Falhou: ".$e->getMessage();//mensagem de falha;
// }


?>
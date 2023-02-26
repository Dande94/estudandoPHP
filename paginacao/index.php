<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";
try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
}catch(PDOException $e){
    echo "Falhou na conexão: ".$e->$getMessage;
}


//loop para 1000 registros
// for($i= 19; $i<=1000;$i++){
//     $randomTimestamp = rand(1, time()); // Gera um timestamp aleatório entre 1 e o timestamp atual
//     $randomDate = new DateTime();
//     $randomDate->setTimestamp($randomTimestamp);
//     $data_criada =  $randomDate->format('Y-m-d H:i:s'); // Exibe a data aleatória no formato 'YYYY-MM-DD HH:MM:SS'
//     $lorem ='Ai você fala o seguinte: "- Mas vocês acabaram isso?" Vou te falar: -"Não, está em andamento!" Tem obras que "vai" durar pra depois de 2010. Agora, por isso, nós já não desenhamos, não começamos a fazer projeto do que nós "podêmo fazê"? 11, 12, 13, 14... Por que é que não?';
//     $titulo = 'Titulo de ref'.$i;
//     $autor='Autor de ref'.$i;

//     $sql = "INSERT INTO posts SET titulo =:titulo ,data_criada = :data_criada, corpo = :corpo, autor = :autor";
//     $sql= $pdo->prepare($sql);
//     $sql->bindValue(':titulo',$titulo);
//     $sql->bindValue(':data_criada',$data_criada);
//     $sql->bindValue(':corpo',$lorem);
//     $sql->bindValue(':autor',$autor);
//     $sql->execute();  
// }


?>
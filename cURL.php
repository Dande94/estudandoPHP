<?php
//biblioteca de integração e requisições;

// $ch = curl_init();//iniciando a lib;

// curl_setopt($ch, CURLOPT_URL,"http://www.checkitout.com.br/wb/pingpong");//qual a url vai ser requisitado;1º a inicialização da lib, 2º setar a url de requisção;
// curl_setopt($ch, CURLOPT_POST, 1); //metodo de envio, 1º inicia a lib, 2 º seta o metodo '1 = POST',
// curl_setopt($ch, CURLOPT_POSTFIELDS,"nome=Anderson&idade=28&sexo=masculino");//caso precide enviar campos de dados, 1º inicia a lib, 2º setar os campos usando uma query string

// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //recebimento do dados (CURLOPT_RETURNTRANSFER) e fiar acompanhando o resultado(true), caso não set o true ele só enviará a requisição e não aompanhará a resposta;

// $resposta = curl_exec($ch);//armazenar a resposta
// curl_close($ch);//fechar a conexão;
// print_r($resposta);

//-----------------------Celke
// $url =  "https://swapi.dev/api/people/";
// // $url =  " https://swapi.dev/api/people/?page=2";
// $ch = curl_init($url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// $resultado = json_decode(curl_exec($ch));
// var_dump($resultado);

// foreach($resultado->results as $ator){
    //     var_dump($ator);
    //     echo "Nome: ".$ator->name."<br>";
    // }
    
//--------------------------------------

$url =  "https://swapi.dev/api/people/";
// $url =  "https://swapi.dev/api/people/?page=2";
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL,$url);
// curl_setopt($ch, CURLOPT_POST, 1); 
// curl_setopt($ch, CURLOPT_POSTFIELDS);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resultado = json_decode(curl_exec($ch));
// $resultado = curl_exec($ch);
curl_close($ch);
// print_r($resultado);

foreach($resultado as $ator){
        print_r($ator);
        echo "Nome: ".$ator->name."<br>";
    }


?>
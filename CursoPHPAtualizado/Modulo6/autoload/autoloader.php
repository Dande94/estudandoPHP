<?php 
//usando a lógica na PSR-1, em arquivo declarar o metodo, e em outro implementar; aqui foi declarado;

//metodo que busca e, registra auto require de uma class; esse metodo tá recebendo uma função anonima, e no argumento já vem automático a classe, mante coênrencia de case ao fazer a busco do arquivo;
spl_autoload_register(function($class){
    if(file_exists("classes/{$class}.php")){//validando a existência do arquivo da class
        require_once "classes/{$class}.php";//se existir, pode ser invocada;
    }
});
?>
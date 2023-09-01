<?php 

spl_autoload_register(function($class){
    $base_dir = __DIR__.'/classes/';//diretório base;(C:\xampp\htdocs\b7web\EstudandoPHP\CursoPHPAtualizado\Modulo6\psr4/classes/)
    $file = $base_dir.str_replace('\\', '/',$class).'.php';
    if(file_exists($file)){
        require_once $file;
    }
});


//constante global: __DIR__ -> que referência até a raíz do projeto;
/**
 *  '\\' -> aqui deve se coloca duas barras inversas, pois se usar uma apenas, no php isso '\' literaliza as aspas(comum em expressões regulares), erro de interpretação;
 */
?>
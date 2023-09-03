<?php 
require_once "vendor/autoload.php";

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Level::Warning));

use \classes\matematica\Basica;
$m = new Basica();
//ou
//$m = new classes\matematica\Basica();
echo $m->somar(10,30);

// add records to the log
$log->warning('Foo');
$log->error('Bar');


?>
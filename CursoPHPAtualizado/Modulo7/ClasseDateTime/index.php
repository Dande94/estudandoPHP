<?php 
date_default_timezone_set('America/Sao_Paulo');//setando zona de horário;

$date = new DateTime();// nesse formato captura a data atual;
//para exibir tem que formatar o resultado;
echo $date->format('d/m/Y');
//caso não convertaar expressara erro,
//echo $date;//->  Uncaught Error: Object of class DateTime could not be converted to string in 
 
echo "<br>";
echo "<br>";
 
 //geradno uma data
$date1 = new DateTime('2023-06-28 15:35:09');//lembrar de usar o padrão internacional
echo $date1->format('d/m/Y');
echo "<br>";
echo $date1->format('d/m/Y H:i:s');
 
echo "<br>";
echo "<br>";
 
 //adicionando tempo
$date2 = new DateTime('2023-06-28 15:35:09');//lembrar de usar o padrão internacional
$date2->add(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));
echo $date2->format('d/m/Y H:i:s');
echo "<br>";
 //subtraindo tempo
$date3 = new DateTime('2023-06-28 15:35:09');//lembrar de usar o padrão internacional
$date3->sub(DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds'));
echo $date3->format('d/m/Y H:i:s');
 
echo "<br>";
echo "<br>";

//comparar duas datas;
$date4 = new DateTime('2023-06-28 15:35:09');
$date5 = new DateTime('2023-09-01 15:35:09');

if($date4 > $date5){
    echo "date4 é maior que date5";
}else{
    echo "date5 é maior que date4";
}
//a data maior é sempre a mais recente;
echo "<br>";
//diferença entre duas datas;
$diff = $date4->diff($date5);
echo "a diferença entre as das é de: ".$diff->format('%a dias');
echo "<br>";
echo "a diferença entre as das é de: ".$diff->format('%m meses, %d dias');
/* 
%a = dia, como data corrida;
%m = meses;
%d = dias por mês;
%y = anos;
%h = horas;
%i = minutos;
%s = segundos;
 */



?>
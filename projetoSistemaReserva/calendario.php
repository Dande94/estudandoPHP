<?php
/*
$data = $_GET['ano'].'-'.$_GET['mes'];//mes e ano de referencia;

$dia1 = date('w', strtotime($data.'-01'));// o 'w' na função date trás a dia da semana como se fosse uma posição de array;

$dias = date('t', strtotime($data));//o 't' trás a quantidade de dias naquele mês;

$linhas = ceil(($dia1+$dias) / 7);//contabilizar a quantidade de linhas para o mês;

$dia1 = -$dia1;//transformando em negativo para poder referencia o domingo;

$data_inicio =  date('Y-m-d', strtotime($dia1.'days', strtotime($data)));//para saber qual dia inicia aquela semana;
$data_fim =  date('Y-m-d', strtotime(($dia1 + ($linhas*7) - 1).'days', strtotime($data)));//para saber o dia do calendário(o '7' é por causa da quantidade de dias em uma semana | o' - 1 ' é para desconta o primeiro que já incluso na variavel $dia1);

echo 'Primeiro Dia: '.$dia1.'<br>';// expressando o dia da semana que começa o mês;
echo 'Total de dias no mês: '.$dias.'<br>';
echo 'Linhas p/ semana: '.$linhas.'<br>';
echo 'Dia que se inicia aquela semana: '.$data_inicio.'<br>';
echo 'Dia que se termina a ultima linha do calendário: '.$data_fim.'<br>';
*/
require 'Classes/carros.class.php';
$carros = new Carros($pdo);
$listaCarros = $carros->getCarros();
?>
<?php echo '<h3>Período: '.$data.'</h3>'?>
<table border="1" width="100%">
    <thead>
        <th>Dom</th>
        <th>Seg</th>
        <th>Ter</th>
        <th>Qua</th>
        <th>Qui</th>
        <th>Sex</th>
        <th>Sab</th>
    </thead>
    <tbody>
        <?php for($l=0; $l < $linhas; $l++): ?>
            <tr>
                <?php for($q=0; $q < 7; $q++): ?>
                    <?php 
                    $t =  strtotime(($q + ($l * 7)).' day', strtotime($data_inicio));
                    $w = date('Y-m-d', $t);//data completa
                    // $w = date('d', strtotime(($q + ($l * 7)).' day', strtotime($data_inicio)));//apenas o dia da data;
                    ?>
                    <td>
                        <?php 
                        echo date('d', $t).'<br><br>';
                        $w = strtotime($w);
                            foreach($lista as $item){
                                $dr_inicio = strtotime($item['data_inicio']);
                                $dr_fim = strtotime($item['data_fim']);
                                if($w >= $dr_inicio && $w <= $dr_fim){
                                    echo $item['pessoa'].' ('.$listaCarros[$item['id_carro']]['nome'].')<br>';//aqui alterei do projeto pois na aula o professor trazia a referencia númerica dos carros, alterei para o trazer o nome dos carros;
                                    /**
                                     * $listaCarros[$item['id_carro']]['nome']
                                     * onde:
                                     * $listaCarros[] -> é a lista que trouxe via require e estanciamento de classes;
                                     * $item['id_carro'] -> referencia númerica extraida da tabela reservas do DB;
                                     * ['nome'] -> chave do array que continha o nome do carro;
                                     */
                                }
                            }
                        ?>
                    </td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </tbody>
</table>

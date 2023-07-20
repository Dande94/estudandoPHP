<?php
date_default_timezone_set('America/Sao_Paulo');
class Tempo
{
    public static function diferenca($data)
    {
        $dataAtual = new DateTime();
        $dataPassada = new DateTime($data);
        $intervalo = $dataAtual->diff($dataPassada);

        $diferenca = '';

        // Anos
        if ($intervalo->y > 0) {
            $diferenca .= $intervalo->y . ' ano' . ($intervalo->y > 1 ? 's' : '') . ', ';
        }

        // Meses
        if ($intervalo->m > 0) {
            $diferenca .= $intervalo->m . ' mês' . ($intervalo->m > 1 ? 'es' : '') . ', ';
        }

        // Dias
        if ($intervalo->d > 0) {
            $diferenca .= $intervalo->d . ' dia' . ($intervalo->d > 1 ? 's' : '') . ', ';
        }

        // Horas
        if ($intervalo->h > 0) {
            $diferenca .= $intervalo->h . ' hora' . ($intervalo->h > 1 ? 's' : '') . ', ';
        }

        // Minutos
        if ($intervalo->i > 0) {
            $diferenca .= $intervalo->i . ' minuto' . ($intervalo->i > 1 ? 's' : '') . ', ';
        }

        // Segundos
        if ($intervalo->s > 0) {
            $diferenca .= $intervalo->s . ' segundo' . ($intervalo->s > 1 ? 's' : '') . ', ';
        }

        // Removendo a vírgula e o espaço extra no final
        $diferenca = rtrim($diferenca, ', ');

        return $diferenca;
    }
}

?>
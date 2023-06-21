<?php

function slug(string $string): string
{
    $mapa['a'] = 'ã';

    $mapa['b'] = 'a                     ';

    $slug = strtr(utf8_decode($string), utf8_decode($mapa['a']), $mapa['b']);

    $slug = strip_tags(trim($slug));
    $slug = str_replace(' ', '_', $slug);
    $slug = str_replace(['_____','____','___','__','_'],'_', $slug);

    return strtolower(utf8_decode($slug));
}

function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n') - 1;
    $ano = date('Y');

    $nomesDiasDaSemana = ['Domingo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sabádo'];

    $nomeDosMeses = [
        'Janeiro',
        'Fevereiro',
        'Março',
        'Abril',
        'Maio',
        'Junho',
        'Julho',
        'Agosto',
        'Setembro',
        'Outubro',
        'Novembro',
        'Dezembro'
    ];

    $dataFormatada = $nomesDiasDaSemana[$diaSemana].', '.$diaMes.' de '.$nomeDosMeses[$mes].' de '.$ano;

    return $dataFormatada;
}

/**
 * Monta url de acordo com o ambiente
 * @param string $url parte da url ex. admin
 * @return string url completa
 */
function url(string $url): string
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');
    $ambiente = ($servidor == 'localhost' ? URL_DESENVOLVIMENTO : URL_PRODUCAO);

    if(str_starts_with($url, '/')){
        return $ambiente.$url;
    }

    return $ambiente.'/'.$url;
}

function localhost(): bool
{
    $servidor = filter_input(INPUT_SERVER, 'SERVER_NAME');

    if($servidor == 'localhost'){
        return true;
    }
    return false;
}

/**
 * Valida uma url
 * @param string $url
 * @return bool
 */
function validarUrl(string $url): bool
{
    if(mb_strlen($url) < 10){
        return false;
    }
    if(!str_contains($url, '.')){
        return false;
    }
    if(str_contains($url, 'http://') or str_contains($url, 'https://')){
        return true;
    }
    return false;
}

function validarUrlComFiltro(string $url): bool
{
    return filter_var($url, FILTER_VALIDATE_URL);
}

/**
 * Valida um endereço de e-mail
 * @param string $email
 * @return bool 
 * */ 
function validarEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * Conta o tempo decorrido de uma data
 * @param string $data
 * @return string
*/
function contarTempo(string $data)
{
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);
    $diferenca = $agora - $tempo;

    $segundos = $diferenca;
    $minutos = round($diferenca / 60);
    $horas = round($diferenca / 3600);
    $dias = round($diferenca / 86400);
    $semanas = round($diferenca / 604800);
    $meses = round($diferenca / 2419200);
    $anos = round($diferenca / 29030400);

    if ($segundos <= 60) {
        return 'agora';
    } elseif ($minutos <= 60) {
        return $minutos == 1 ? 'Há 1 minuto' : 'Há '.$minutos.' minutos';
    } elseif ($horas <= 24) {
        return $horas == 1 ? 'Há 1 hora' : 'Há '.$horas.' horas';
    } elseif ($dias <= 7) {
        return $dias == 1 ? 'Há 1 dia' : 'Há '.$dias.' dias';
    } elseif ($semanas <= 4) {
        return $semanas == 1 ? 'Há 1 semana' : 'Há '.$semanas.'  semanas';
    } elseif ($meses <= 12) {
        return $meses == 1 ? 'Há 1 mês' : 'Há '.$meses.' meses';
    } else {
        return $anos == 1 ? 'Há 1 ano' : 'Há '.$anos.' anos';
    }
}

/** 
 * Formata um valor com ponto e virgula
 * @param float $valor
 * @return string
*/
function formatarValor(float $valor): string
{
    return number_format($valor, 2, ',', '.' );
}

/**
 * Formata um número com pontos
 * @param int $numero
 * @return string 
*/
function formatarNumero(string $numero = null): string
{
    return number_format($numero ?: 0,0,'.','.');
}

function saudacao(): string
{
    $hora = date('H');

    if ($hora >= 0 && $hora <= 5) {
        $saudacao = 'boa madrugrada';
    } elseif ($hora >= 6 and $hora <= 12) {
        $saudacao = 'bom dia';
    } elseif ($hora >= 13 and $hora <= 18) {
        $saudacao = 'boa tarde';
    } else {
        $saudacao = 'boa noite';
    }
    return $saudacao;
}

/** 
* Resume um texto
*
* @param string $texto texto para resumir
* @param int $limite quantidade de caracteres
* @param string $continue (opcional - o que deve ser exibido ao final do resumo)
* @return string texto resumido
*/
function resumirTexto(string $texto, int $limite, string $continue = '...'): string
{

    $textoLimpo = trim(strip_tags($texto));
    if(mb_strlen($textoLimpo) <= $limite){
        return $textoLimpo;
    }

    $resumirTexto = mb_substr($textoLimpo, 0, mb_strrpos(mb_substr($textoLimpo, 0, $limite), ''));

    return $resumirTexto.$continue;
}

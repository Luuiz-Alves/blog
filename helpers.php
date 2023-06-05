<?php 
    function saudacao(): string
    {
        $hora = 2;
        $saudacao = '';

        if($hora >= 0 && $hora <= 5){
            $saudacao = 'boa madrugrada';
        }
        if($hora >= 6 && $hora <= 12){
            $saudacao = 'bom dia';
        }

        return $saudacao;
    }

    function resumirTexto(string $texto, int $limite,string $continue = '...'): string
    {
        return $texto;
    }
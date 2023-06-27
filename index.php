<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once 'sistema/configuracao.php';
        include_once 'helpers.php';

        $cpf = '16932570769';

        var_dump(validarCpf($cpf));

        // echo $limparNumero = preg_replace('/[^0-9]/', '', $cpf);

        // while ($numero <= 10){
        //    echo $numero++;
        // }
        // for($i = 1; $i <= 10; $i++){
        //    echo ($i % 2 ? $i.' impar' : $i.' par').'<br>';
        //    echo $i.' x '.$numero.' = '.$i*$numero.'<br>';
        // }
    ?>
</body>
</html>
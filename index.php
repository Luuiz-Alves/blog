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

        /*
        if(validarEmail('l.alves158@hotmail.com')){
            echo 'Endereço de e-mail válido';
        } else {
            echo 'E-mail inválido';
        }*/

        var_dump(validarUrl('http://localhost/blog/'));

        //var_dump(validarEmail('l.alves158@gmail.com'));
    ?>
</body>
</html>
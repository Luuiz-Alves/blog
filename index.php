<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //declare(strict_types = 1);
        require_once 'sistema/configuracao.php';
        include_once 'helpers.php';

        $texto = 'texto para resumir';
        
        $string = 'texto';
        $int = 10;
        $float = 9.99;
        $bool = true;
        $nulo = null;

        var_dump($texto);
        echo '<hr>';
        echo saudacao();
        echo '<hr>';
        echo resumirTexto($texto, 100, 'continue');
    ?>
</body>
</html>
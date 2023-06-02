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
        require_once 'sistema/configuracao.php';
        include_once 'helpers.php';

        echo saudacao();
        echo '<hr>';
        echo resumirTexto();
    ?>
</body>
</html>
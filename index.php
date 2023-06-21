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

        echo slug("Adão 'Negro' - '2022'").'<hr>';
        echo slug("Avatar 2").'<hr>';
        echo slug("Não! Não olhe!").'<hr>';
        echo slug("Sonic 2").'<hr>';
        echo slug("Dsiney Plus++").'<hr>';
        echo slug("Os melhores filmes").'<hr>';
        echo slug("Teste!@$%¨!@#$2$###6?8????!!!").'<hr>';
    ?>
</body>
</html>
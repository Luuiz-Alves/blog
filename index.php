<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php 
        require_once 'sistema/configuracao.php';
        include_once 'helpers.php';
        include './sistema/Nucleo/Mensagem.php';

        use sistema\Nucleo\Mensagem;
        use sistema\Nucleo\Mensagem as msg;

        echo (new msg)->alerta('texto de alerta');

        // $msg = new Mensagem();
        // echo $msg->sucesso('Mensagem de sucesso')
        //          ->renderizar();

        // echo (new Mensagem())->erro('Mensagem de erro')->renderizar();
    ?>
</body>
</html>
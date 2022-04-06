<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando o Composer</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            require 'vendor/autoload.php';
            use \classes\matematica\Basica;
            use Monolog\Logger;
            use Monolog\Handler\StreamHandler;

            $m = new Basica();

            echo $m->somar(10,10);

            //--------------------------------------------


            // create a log channel
            $log = new Logger('name');
            $log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

            // add records to the log
            $log->warning('Foo');
            $log->error('Bar');
        ?>
    </div>    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo PSR-4</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <a href="https://www.php-fig.org/psr/psr-4/">PSR-4: Autloloader</a>
        <hr>
        <?php
            require 'autoload.php';
            use \matematica\Basica;
            use \foto\Upload;

            $b = new Basica(); 
            $up = new Upload();

            echo $b->somar(10,30);
           

            
        ?>

    </div>   
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Prático</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            require_once "Calculadora.php"    ;

            $calc = new Calculadora();

            $calc->add(10);
            $calc->add(20);
            $calc->sub(5);
            $calc->mult(2);
            $calc->div(5);

            echo $calc->getNum();
        ?>
    </div>    
</body>
</html>
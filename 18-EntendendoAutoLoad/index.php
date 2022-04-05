<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo AutoLoad</title>
</head>
<body>
    <div>
        <?php
            
            require 'autoload.php';

            $mat = new Matematica();
            $algo = new Algo();
            


            echo 'Soma = '. $mat->somar(50,20).'<br>';

            echo "N1 = ". $mat->getNum1()."<br>";
            echo "N2 = ". $mat->getNum2()."<br>";

            
        ?>

    </div>   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etendendo NameSpace</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            require 'Classe1.php';
            require 'Classe2.php';
            require 'Classes/Matematica/basico.php';

            $c1 = new classe1\MinhaClasse();
            $c2 = new classe2\MinhaClasse();

            echo $c1->testar()."<br>";
            echo $c2->testar()."<br>";

            echo "<hr>";
            //---------------------------------------------------------------

            use Classes\Matematica\Basico as Basico;

            $basico = new Basico();



        ?>
    </div>    
</body>
</html>
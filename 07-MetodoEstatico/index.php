<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método Estático</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            class Matematica{

                public static string $nome = 'Fulano';

                public static function somar(int $x, int $y){
                    return $x + $y;
                }


            }    

            //$m = new Matematica();

            # Com o método static não é necessario criar um objeto para acessá-lo...

            echo Matematica::$nome. "<br>";

            echo Matematica::somar(50,70);
        ?>
    </div>    
</body>
</html>
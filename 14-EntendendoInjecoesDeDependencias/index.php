<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etendendo Injeções de Dependência</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php


            interface MatematicaBasica{

                public function somar($x, $y);          

            }


            class Basico1 implements MatematicaBasica{

                public function somar($x, $y){
                    return $x + $y;
                }
            }

            class Basico2 implements MatematicaBasica{

                public function somar($x, $y){
                    
                    $res = $x;

                    for($q = 0; $q < $y; $q ++){
                        $res ++;
                    }

                    return $res;
                }
            }


            class Matematica{

                private $basico;

                public function __construct(MatematicaBasica $basico)
                {
                    $this->basico = $basico;
                }

                public function somar($x, $y){
                    
                    return $this->basico->somar($x, $y);
                }
            }

            $basico = new Basico2();
            $mat = new Matematica($basico);

            echo $mat->somar(50,15);




            
        ?>
    </div>    
</body>
</html>
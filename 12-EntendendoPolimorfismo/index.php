<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Entendendo Polimorfismo</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div>
        <?php
            
            interface Forma{
                public function getTipo();
                public function getArea();
            }

            class Quadrado implements Forma{

                private $largura;
                private $altura;

                public function __construct($largura, $altura)
                {
                    $this->largura = $largura;
                    $this->altura = $altura;
                }

                public function getTipo(){
                    return 'quadrado';
                }
                public function getArea(){
                    return $this->largura * $this->altura; 
                }
            }

            class Circulo implements Forma{

                private $raio;


                public function __construct($raio)
                {
                    $this->raio = $raio;
                }

                public function getTipo(){
                    return 'círculo';
                }
                public function getArea(){
                    return round(pi() * ($this->raio * $this->raio));
                }
            }

            $quadrado = new Quadrado(5,5);
            $circulo = new Circulo(7);

            
            $objetos = [
                $quadrado,
                $circulo
            ];

            foreach($objetos as $obj){

                $tipo = $obj->getTipo();
                $area = $obj->getArea();

                echo "AREA: " .$tipo. " : " .  $area . "<br>";
            }
        ?>
    </div>    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Herança</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php

            # Classe Post

            class Post{

                private int $id;
                private int $likes = 0;

                # Getters / Setters

                public function getId(){
                    return $this->id;
                }
                public function setId($id){
                    $this->id = $id;
                }

                public function getLikes(){
                    return $this->likes;
                }
                public function setLikes($likes){
                    $this->likes = $likes;
                }
                
                
            }

            # Classe Foto
            class Foto extends Post{

                private string $url;

                # Método Construtor
                public function __construct($id)
                {   
                    $this->setId($id);
                }

                # Getters / Setters
                public function getUrl(){
                    return $this->url;    
                }
                public function setUrl($url){
                    $this->url = $url;
                }
            }

            # Programa Principal - Index

            $foto = new Foto(1);  
            $foto->setUrl('https://www.google.com/imgres?imgurl=https%3A%2F%2Ftm.ibxk.com.br%2F2014%2F06%2F06%2F06165614150388.jpg%3Fims%3D1120x420&imgrefurl=https%3A%2F%2Fwww.tecmundo.com.br%2Ftutorial%2F57656-descubra-origem-imagens-voce-possui-computador.htm&tbnid=d6zAkbPaYFNltM&vet=12ahUKEwi9wsicv_r2AhVhMbkGHUwbC3EQMygAegUIARDUAQ..i&docid=D4UJStcIXkeOgM&w=1120&h=420&q=google%20imagens&ved=2ahUKEwi9wsicv_r2AhVhMbkGHUwbC3EQMygAegUIARDUAQ');
            $foto->setLikes(1);

            echo "Foto: #". $foto->getId(). " - ". $foto->getLikes(). " Likes<br>";





        ?>
    </div>    
</body>
</html>
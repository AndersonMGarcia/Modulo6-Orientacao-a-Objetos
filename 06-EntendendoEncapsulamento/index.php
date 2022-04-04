<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entendendo Encapsulamento</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php

use Post as GlobalPost;

            class Post{
                private int $id;
                private int $likes;
                private array $coments = [];
                private string $autor;

                # Método Construtor
                public function __construct()
                {
                    
                }

                # Métodos
                public function aumentarLike()
                {
                    $this->likes ++;
                }

                # Métodos Getters/Setters
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

                public function getAutor()
                {
                    return $this->autor;
                }
                public function setAutor($autor){

                    if (strlen($autor) >= 3){
                        $this->autor = ucfirst($autor);
                    }
                    
                }


                
            }            


            # ---------------------------------------

            $post1 = new Post();
            $post2 = new Post();

            $post1->setAutor('Fulano');
            $post1->setLikes(1);
            $post2->setAutor('Ciclano');
            $post2->setLikes(3);
            
            
            
            echo 'POST 1: '. $post1->getLikes(). ' Likes - '. $post1->getAutor(). '<br>';
            echo 'POST 2: '. $post2->getLikes(). ' Likes - '. $post2->getAutor(). '<br>';
        ?>
    </div>    
</body>
</html>
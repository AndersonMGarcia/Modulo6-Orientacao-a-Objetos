<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Método Construtor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php

use Post as GlobalPost;

            class Post{
                public int $id;
                public int $likes;
                public array $coments = [];
                public string $autor;

                public function __construct($postId)
                {
                    $this->id = $postId;
                    # consultar banco de dados para pegar informações do POST $id
                    $this->likes = 12 * $postId;
                }

                public function aumentarLike()
                {
                    $this->likes ++;
                }
            }            


            # ---------------------------------------

            $post1 = new Post(1);
            $post2 = new Post(2);
            
            
            
            echo 'Post 1: '. $post1->likes. ' likes<br>';
            echo 'Post 2: '. $post2->likes. ' likes<br>';
        ?>
    </div>    
</body>
</html>
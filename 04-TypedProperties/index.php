<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typed Properties (7.4)</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
        <?php
            class Post{
                public int $likes = 0;
                public array $coments = [];
                public string $autor;

                public function aumentarLike(){
                    $this->likes ++;
                }
            }            


            # ---------------------------------------

            $post1 = new Post();
            $post1->likes = 3;
            

            $post2 = new Post();
            $post2->likes = 10;
            $post2->aumentarLike();
            
            
            echo 'Post 1: '. $post1->likes. ' likes<br>';
            echo 'Post 2: '. $post2->likes. ' likes<br>';
        ?>
    </div>    
</body>
</html>
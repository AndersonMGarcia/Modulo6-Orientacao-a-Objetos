<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Entendendo Interface</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <div>
        <?php

            interface Database{
                
                public function listarProdutos();
                public function adicionarProduto();
                public function alterarProduto();
            }

            class MysqlDb implements Database{

                public function listarProdutos(){
                    echo "Listando com MySQL <br>";
                }

                public function adicionarProduto(){
                    echo "Adicionando com MySQL <br>";
                }

                public function alterarProduto(){
                    echo "Alterando com MySQL <br>";
                }
            }

            class Oracle implements Database{

                public function listarProdutos(){
                    echo "Listando com Oracle <br>";
                }

                public function adicionarProduto(){
                    echo "Adicionando com Oracle <br>";
                }

                public function alterarProduto(){
                    echo "Alterando com Oracle <br>";
                }
            }


            class NodeDb implements Database{
                
                public function listarProdutos(){
                    echo "Listando com MySQL <br>";
                }

                public function adicionarProduto(){
                    echo "Adicionando com MySQL <br>";
                }

                public function alterarProduto(){
                    echo "Alterando com MySQL <br>";
                }
            }

            $mysql = new MysqlDb();
            $oracle = new Oracle();
            $mysql->adicionarProduto();
            $oracle->adicionarProduto();

        ?>
    </div>    
</body>
</html>
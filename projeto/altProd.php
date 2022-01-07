<?php 
 session_start();
 include("arraysFuncoes.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/admin.css">
    <title>alterar</title>
</head>

<body>
    <img src="assets/logo.png" class="icone">
    <main class="main"> 

    <nav class="menu">   
        <a href="../index.php">        <input type="button" value="Home page"> </a> 
        <a href="promos.php"><input type="button" value="Catálogo de promoções"> </a>
        <a href="sobre.php">     <input type="button" value="Sobre nós"> </a>
        <a href="admin.php">        <input type="button" value="Admin page"> </a> 
        <a href="sessions end.php"> <input type="button" value="Log off"></a>
    </nav>

    <section class="table-responsive">
            <table class="table">
                <thead>
                    <tr class="row">
                        <th>#</th>
                        <th>produto</th>
                        <th>imagem</th>
                        <th>preço</th>
                        <th>alterar</th>
                    </tr>
                </thead>
                <tbody>
                <?php

                for($i = 0; $i < sizeof($prods); $i++) {
                    echo '
                    <tr class="row">
                    <form action="alterar.php" method="POST">
                        <th>      
                        <input type="hidden" value="'. $prods[$i]->id .'" class="altInps"
                        name="id"> '. $prods[$i]->id .'
                        </th>
                        <th>
                        <input type="text" value="'. $prods[$i]->nome .'" class="altInps" name="nome">
                        </th>
                        <th>
                        <input type="file" placeholder="'. $prods[$i]->imagem .'" class="altInps" name="imagem">
                        </th>
                        <th>
                        <input type="number" value="'. $prods[$i]->preco * 100 .'" class="altInps" name="preco">
                        </th>
                        <th><input type="image" src="assets/confirm.png"></th>
                    </form>
                    </tr>
                    ';
                }

                ?>
                </tbody>
            </table>
        <div class="space-filler"></div>
    </section>

    <footer></footer>
</body>            
</html>
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
    <title>Projeto PW</title>
</head>

<body>


    <img src="assets/logo.png" class="icone">
    <main class="main"> 

        <nav class="menu">   
            <a href="../index.php">     <input type="button" value="Página inicial"> </a> 
            <a href="promos.php"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobre.php">     <input type="button" value="Sobre nós"> </a>
            <a href="#">                <input type="button" value="Admin page"> </a> 
            <a href="sessions end.php"> <input type="button" value="Log off"></a>
        </nav>

        <section class="botoes">
            <a href="adProd.php"> <input type="button" class="btn" value = "Adicionar produto"></a>
            <a href="altProd.php"><input type="button" class="btn" value = "Alterar produto"></a>
            <a href="rmvProd.php"><input type="button" class="btn" value = "Remover produto"></a>
        </section>

        <section class="table-responsive">
                <table class="table">
                    <thead>
                        <tr class="row">
                            <th>#</th>
                            <th>produto</th>
                            <th>imagem</th>
                            <th>preço</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php

                    for($i = 0; $i < sizeof($prods); $i++) {
                        echo '
                        <tr class="row">
                            <th>      
                            '. $prods[$i]->id .'
                            </th>
                            <th>
                            '. $prods[$i]->nome .'
                            </th>
                            <th>
                            '. $prods[$i]->imagem .'
                            </th>
                            <th>
                            '. $prods[$i]->preco .'
                            </th>
                        </tr>
                        ';
                    }

                    ?>
                    </tbody>
                </table>
                <div class="space-filler"></div>
        </section>
    </main>
    <footer></footer>
</body>
</html>
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
    <title>remover</title>
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
        <form action="remover.php" method="post">

            <section class="admbtns">
                Selecione o produto que será removido do banco de dados 
                <select name="produto" required>
                <option value="" disabled selected >Selecionar produto</option>
                <?php
                for ($i=0; $i < sizeof($prods); $i++) { 
                    echo'
                    <option value="'. $prods[$i]->id .'">'. $prods[$i]->nome .'</option>
                    ';
                }
                ?>
                </select>
            </section>

            <section class="admbtns">
                <input type="submit" name="env" value="Remover produto">
            </section>

        </form>
    </main>
    <footer></footer>

</body>
</html>
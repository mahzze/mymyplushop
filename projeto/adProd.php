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
    <link rel="stylesheet" href="assets/admin.css">">
    <title>adicionar</title>
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
        <form action="adicionar.php" method="post">

            <section class="admbtns">
                <input type="nome" name="nome" placeholder="Digite o nome do produto" 
                required>
            </section>
            
            <section class="admbtns">
                A imagem selecionada deve estar na pasta assets, caso contrário ela não será mostrada
                <p><input type="file" name="imagem" required></p>
                
            </section>
            
            <section class="admbtns">
                <input type="number" name="preco" placeholder="Digite o valor do produto em centavos"
                required>
            </section>

            <section class="admbtns">
                <input type="submit" name="env" value="Adicionar produto">
            </section>

        </form>
    </main>
    <footer></footer>

</body>
</html>
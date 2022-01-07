<?php 
 session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/sobre.css">
    <title>Projeto PW</title>
</head>

<body>
    <img src="assets/logo.png" class="icone">

        <nav class="menu">   
        <a href="../index.php">        <input type="button" value="Home page"> </a> 
            <a href="promos.php"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobre.php">     <input type="button" value="Sobre nós"> </a>
            <?php 

            if(!isset($_SESSION["username"])){
                echo
                '
                <a href="login.html"><input type="button" value="Login"> </a>
                ';
            }
            else {

                if($_SESSION['username'] == "admin" && $_SESSION['email'] == "mymy_Plushop@gmail.com"){
                    echo'
                    <a href="admin.php"><input type="button" value="Admin page"> </a> 
                    ';
                }
                echo
                '
                <a href="sessions end.php"><input type="button" value="Log off"></a>
                ';
            }
            ?>
        </nav>
        <div class="container">   
            <div class="about">
                O que é a Plushop?
            </div>

            <div class="us">
                <p>
                    A Plushop é uma loja imaginária que (não) vende bonecos de pelúcia.
                </p>
                <p>
                    Contatos: nenhum, pois a Plushop não existe.
                </p>
            </div>
        </div> 
    <footer></footer>
</body>
</html>
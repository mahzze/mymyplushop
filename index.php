<?php 
 session_start();
 include("projeto/arraysFuncoes.php");
 include("projeto/inisEVars.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projeto/assets/index.css">
    <title>Projeto PW</title>
</head>

<body>
    
    <img src="projeto/assets/logo.png" class="icone">    
    <main class="main"> 

        <nav class="menu">   
            <a href="#">                     <input type="button" value="Página inicial"> </a> 
            <a href="projeto/promos.php">    <input type="button" value="Catálogo de promoções"> </a>
            <a href="projeto/sobre.php">     <input type="button" value="Sobre nós"> </a>
            <?php 
            
            if(!isset($_SESSION["username"])){
                echo
                '
                <a href="projeto/login.html"><input type="button" value="Login"> </a>
                ';
            }
            else {
            
                if($_SESSION['username'] == "admin" && $_SESSION['email'] == "mymy_Plushop@gmail.com"){
                echo'
                <a href="projeto/admin.php"><input type="button" value="Admin page"> </a> 
                ';
                }

                echo
                '
                <a href="projeto/sessions end.php"><input type="button" class="button" value="Log off"></a>
                ';
            }

            ?>
        </nav>
            
        <?php
        inicializacao();

        ?>
    </main>
    <footer></footer>
    
</body>
</html>
<?php 
 session_start();
 include_once('arraysFuncoes.php');
 include_once('inisEVars.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/index.css">
    <title>promoções</title>
</head>

<body>
    <img src="assets/logo.png" class="icone">
    <main class="main"> 

        <nav class="menu">   
            <a href="../index.php">        <input type="button" value="Home page"> </a> 
            <a href="#"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobre.php">     <input type="button" value="Sobre nós"> </a>
            <?php 
            if(!isset($_SESSION["username"])){
                echo
                '
                <a href="login.html"><input type="button" value="Login"> </a>
                ';
            }
            else {

                if($_SESSION['username'] == "admin"){
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
        
        <?php 
            if(!isset($_SESSION["username"])){
                echo
                '
                <div id="indisponivel">
                Apenas clientes cadastrados podem ver as promoções.
                </div>
                ';
            }
            else 
            iniPromo();
        ?>
    </main>
    <footer></footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
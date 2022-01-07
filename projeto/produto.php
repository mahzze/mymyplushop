<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="assets/produto.css">
</head>
<body>
    <img src="assets/logo.png" class="icone">

    <main class="main"> 
        
        <nav class="menu">   
            <a href="../index.php">        <input type="button" value="Home page"> </a> 
            <a href="promos.php"><input type="button" value="Catálogo de promoções"> </a>
            <a href="sobre.php">     <input type="button" value="Sobre nós"> </a>

            <?php  
    
            if(!isset($_SESSION["username"])){
                echo
                '
                <a href="login.html"><input type="button" value="Login"> </a>
                </nav>
                    <div>
                    Os produtos só podem ser visualizados por clientes cadastrados.
                    </div>
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
                <a href="sessions end.php"><input type="button" value="Log out"> </a>
                </nav>
                ';
            ?>
            <input type ="button" id="prodind" value="Comprar" onclick="prodInd()">
            
            <script type="text/javascript">
    
                var imagem = document.createElement("img")
                    imagem.setAttribute('id' , 'imagemprod')
                    imagem.setAttribute('src', `assets/${sessionStorage.getItem("imagem")}`)

                var section = document.createElement("section")
                section.setAttribute('id' , 'cont')

                var conteudo = `
                        <div class="nomeepreco">
                            ${sessionStorage.getItem('nome')}
                        </div>
                        <div class="nomeepreco">
                           R$: ${sessionStorage.getItem('preco')}
                        </div>
                `
                section.innerHTML = conteudo
                
                document.querySelector("main.main").insertBefore(imagem,  document.querySelector("input[type='button']#prodind"))
                document.querySelector("main.main").insertBefore(section, document.querySelector("input[type='button']#prodind"))

                const prodInd = () => alert("produto selecionado não está disponivel para a compra")
                
            </script>

            <?php
             } 
            ?>
            
    </main>
    <footer></footer>
    </html>
</body>
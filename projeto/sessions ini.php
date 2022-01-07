<?php


include_once("conecBD.php");

    $id = $conexao->query("SELECT * from usuario where email = '". $_POST['email'] ."' and senha = '". $_POST['senha'] ."';");

    if ($id->num_rows == 0) 
    {          
        header('Location: login.html');
    }
    else
    {   
        session_start();
        $row = $id->fetch_assoc();

        $_SESSION["email"]    = $row["email"];
        $_SESSION["username"] = $row["nome"];
        $_SESSION["senha"]    = $row["senha"];

        header('Location: ../index.php');
    }
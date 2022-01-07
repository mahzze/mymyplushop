<?php
include_once("conecBD.php");

$inserir = "
    INSERT INTO produtos (nome , imagem , preco)
    VALUES (
        '". $_POST['nome'] ."',
        '". $_POST['imagem'] ."',
        ". ($_POST['preco'] / 100) ."
    );
";

$conexao->query($inserir);

header('Location: admin.php');
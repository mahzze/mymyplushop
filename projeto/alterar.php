<?php
include_once("conecBD.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$imagem = $_POST['imagem'];

if(!empty($_POST['imagem'])){
    $alterar = "UPDATE produtos SET nome = '$nome', preco = $preco/100, imagem = '$imagem' WHERE id = $id;";
}
else{
    $alterar = "UPDATE produtos SET nome = '$nome', preco = $preco/100 WHERE id = $id;";
}

$conexao->query($alterar);

header('Location: admin.php');

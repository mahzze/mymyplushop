<?php
include_once("conecBD.php");

$email = $_REQUEST["email"];
$nome = $_REQUEST["nome"];
$senha = $_REQUEST["senha"];

$insert = "INSERT INTO usuario (email, nome, senha) VALUES ('$email', '$nome', '$senha');";

$conexao->query($insert);


header('Location: login.html');
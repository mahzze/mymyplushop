<?php

$host   = "localhost";
$user   = "root";
$senha  = "";
$banco  = "mymy_Plushop";

$conexao = new mysqli($host, $user, $senha, $banco);

if($conexao->connect_errno) {
    die('Não foi possível se conectar ao banco de dados');
}

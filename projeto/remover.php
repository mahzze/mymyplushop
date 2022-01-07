<?php
include_once("conecBD.php");

$remover = "DELETE FROM produtos WHERE id = ". $_POST['produto'] .";";

$conexao->query($remover);

echo $remover;

header('Location: admin.php');
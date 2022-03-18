<?php

include_once("conecBD.php");

class Produto{

    public $nome;
    public $imagem;
    public $preco;

    public function __construct($id ,$nome, $imagem, $preco) {
        $this->id    = $id;
        $this->nome  = $nome;
        $this->imagem = $imagem;
        $this->preco = $preco;
    }
}

$prods = array();
$prodsBD = $conexao->query("SELECT * FROM produtos");

while($row = $prodsBD->fetch_assoc()){
    $id    = $row['id'];
    $nome  = $row['nome'];
    $imagem = $row['imagem'];
    $preco = $row['preco'];
    array_push($prods, new Produto($id, $nome, $imagem, $preco));
}
?>


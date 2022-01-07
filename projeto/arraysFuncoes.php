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

function inicializacao(){
    global $prods;
    
    for ($i=0; $i < 8; $i++) { 
        echo"
         
            <section class = 'produto' onclick='selecprodindex(".$i.")'>
            
            <div>
                <img src='projeto/assets/".  $prods[$i]->imagem ."'>
            </div>

            <div>
                    ".  $prods[$i]->nome ."
            </div>

            <div>
                    R$: ".  $prods[$i]->preco ."
            </div>

            </section>
  
        ";
    }

    echo '<input type="button" class="verMais" value="Ver mais..." onclick="verMais()"> ';
}

function iniPromo(){
    global $prods;
    foreach( $prods as $produto) { 
        if($produto->preco <= 90){    
            echo"
                
                <section class = 'produto' onclick='selecprodpromo(".$produto->id.")'>

                <div>
                    <img src= 'assets/".  $produto->imagem ."'>
                </div>

                <div>
                    <span>
                        ".  $produto->nome ."
                    </span>
                </div>

                <div>
                    <span>
                        R$: ".  $produto->preco ."
                    </span>
                </div>

                </section>
                
            ";
        }
    }
}
?>


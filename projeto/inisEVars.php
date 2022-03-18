<?php

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

<script type="text/javascript">   
    var qtprod = '<?= sizeof($prods); ?>'
    qtprod = Number(qtprod)
    var prods = JSON.parse('<?= json_encode($prods); ?>')
    var mostrados = 8

    function addclick(obj,param){
        obj.addEventListener("mousedown" , function (event){
            selecprodindex(param)
        })
    }

    const verMais = () => {

        var container    = document.querySelector("main.main")
        var btnVerMais = document.querySelector(".verMais")

        for(let cont = mostrados; cont < mostrados + 4; cont++){
            
            let sec = document.createElement("section")
            sec.setAttribute('class', 'produto')
            sec.setAttribute('id', cont)
            sec.addEventListener('load', addclick(sec , sec.id))
            let conteudo = 
            `
                <div>
                    <img src='projeto/assets/${prods[cont].imagem}'>
                </div>
        
                <div>
                        ${prods[cont].nome}
                </div>
        
                <div>
                        R$: ${prods[cont].preco}
                </div>
            `
            sec.innerHTML = conteudo

            container.insertBefore(sec, btnVerMais)

            if (cont >= qtprod -1) {
                container.removeChild(btnVerMais)
            }

        }

        mostrados += 4
        
    }


    const selecprodindex = (btn) => {
        sessionStorage.setItem("nome",  prods[btn].nome)
        sessionStorage.setItem("imagem", prods[btn].imagem)
        sessionStorage.setItem("preco", prods[btn].preco)
          window.location.href="projeto/produto.php"
    }

    const selecprodpromo = (btn) => {
       sessionStorage.setItem("nome", prods[btn -1].nome)
       sessionStorage.setItem("imagem", prods[btn -1].imagem)
       sessionStorage.setItem("preco", prods[btn -1].preco)
          window.location.href="produto.php"
    }
</script>


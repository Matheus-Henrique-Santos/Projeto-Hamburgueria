<!DOCTYPE html>
<html>
    <head>
        <title>Hamburgueria</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">

    </head>
    <body>
        <?php 
            require_once('../modulos/menu.php')
        ?>                 
        
        <div class="containerConteudo">
                
            <div class="conteudo">
                <div class="anuncio">
                    <h1> Nossas promoções da semana </h1>
                </div>


                <div class="containerProdutoPromocoes">
                    <div class="produto">
                        <div class="fotoProduto">
                            <img src="../imagens/street.jpg" alt="Imagem de hamburger">
                        </div>
                        <div class="descricaoProduto">
                            <p><br>Preço Promocional: </p>
                        </div>
                    </div>

                    <div class="produto">
                        <div class="fotoProduto">
                            <img src="../imagens/smoked.jpg" alt="Imagem de hamburger">
                        </div>
                        <div class="descricaoProduto">
                            <p><br>Preço Promocional: </P>
                        </div>
                    </div>

                    <div class="produto">

                        <div class="fotoProduto">
                            <img src="../imagens/white_mush_g.jpg" alt="Imagem de hamburger">
                        </div>
                        <div class="descricaoProduto">
                            <p><br>Preço Promocional: </p>
                        </div>
                    </div>  


                    <div class="produto">
                        <div class="fotoProduto">
                            <img src="../imagens/junk.jpg" alt="Imagem de hamburger">
                        </div>
                        <div class="descricaoProduto">
                            <p><br>Preço Promocional: </p>
                        </div>
                    </div>
                </div>

            </div>
                    
        </div>
        
        <?php 
            require_once('../modulos/rodape.php')
        ?>  
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Hamburgueria</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta charset="utf-8">
        <script src="../js/jquery.js"></script>
        <script src="../js/ancora.js"></script>
        <script type="text/javascript" src="../js/jquery-1-8-3-min.js"></script>
        <script type="text/javascript" src="../js/jquery-cycle-all.js"></script>
        <script src="../js/slide.js"></script>

    </head>
    <body>
        <?php 
            require_once('../modulos/menu.php')
        ?>                 
        
        <div class="containerConteudo">
            
                <div class="divBoxExibicao">
                    <div class="divBoxAnterior">
                        <p id="prev" class="buttons"><a href="#">&laquo;</a></p>
                    </div>

                        <div class="divBoxImagemSlide">
                            <ul>
                                <li><img class="imagemSlide" src="../imagensSlide/imagem1.png" alt="Imagem1"></li>
                                <li><img class="imagemSlide" src="../imagensSlide/imagem2.jpg" alt="Imagem2"></li>
                                <li><img class="imagemSlide" src="../imagensSlide/imagem3.jpg" alt="Imagem3"></li>
                                <li><img class="imagemSlide" src="../imagensSlide/imagem4.jpg" alt="Imagem4"></li>
                                <li><img class="imagemSlide" src="../imagensSlide/imagem5.jpg" alt="Imagem5"></li>
                                <li><img class="imagemSlide" src="../imagensSlide/imagem6.jpg" alt="Imagem6"></li>
                            </ul>
                        </div>

                    <div class="divBoxProximo" >
                        <p id="next" class="buttons"><a href="#">&raquo;</a></p>
                    </div>
                </div>
                
                <div class="conteudo">
                    <div id="containerRedesSociais">
                        <div class="redesSociais">
                        <img class="apenasDesk" src="../imagens/twitter.png" alt="Imagem de hamburger" >
                        </div>
                        <div class="redesSociais">
                        <img class="apenasDesk" src="../imagens/facebook.png" alt="Imagem de hamburger">
                        </div>
                        <div class="redesSociais">
                        <img class="apenasDesk"
                             src="../imagens/instagram.png" alt="Imagem de hamburger">
                        </div>
                    </div>
                    <div class="containerItens" class="apenasDesk">
                        <ul id="listaIntens" class="apenasDesk">
                        
                            <li class="itens" class="apenasDesk">Item 1</li>
                            <li class="itens" class="apenasDesk">Item 2</li>
                            
                        </ul>
                    </div>
                
                    
                    <div class="containerProduto">
                        <div class="produto">
                            <div class="fotoProduto">
                                <img src="../imagens/street.jpg" alt="Imagem de hamburger">
                            </div>
                            <div class="descricaoProduto">
                                <p><br>Nome: </p>
                                <p><br>Descrição:</p>
                            </div>
                        </div>
                        
                        <div class="produto">
                            <div class="fotoProduto">
                                <img src="../imagens/smoked.jpg" alt="Imagem de hamburger">
                            </div>
                            <div class="descricaoProduto">
                                <p><br>Nome: </p>
                                <p><br>Descrição:</p>
                            </div>
                        </div>

                        <div class="produto">
                        
                            <div class="fotoProduto">
                                <img src="../imagens/white_mush_g.jpg" alt="Imagem de hamburger">
                            </div>
                            <div class="descricaoProduto">
                                <p><br>Nome: </p>
                                <p><br>Descrição:</p>
                            </div>
                        </div>  


                        <div class="produto">
                            <div class="fotoProduto">
                                <img src="../imagens/junk.jpg" alt="Imagem de hamburger">
                            </div>
                            <div class="descricaoProduto">
                                <p><br>Nome: </p>
                                <p><br>Descrição:</p>
                            </div>
                        </div>


                        <div class="produto">
                            <div class="fotoProduto">
                                <img src="../imagens/original_g.jpg" alt="Imagem de hamburger">
                            </div>
                            <div class="descricaoProduto">
                                <p><br>Nome: </p>
                                <p><br>Descrição:</p>
                            </div>
                        </div>

                        <div class="produto">
                            <div class="fotoProduto">
                                <img src="../imagens/spicy_sour_g.jpg" alt="Imagem de hamburger">
                            </div>
                            <div class="descricaoProduto">
                                <p><br>Nome: </p>
                                <p><br>Descrição:</p>
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
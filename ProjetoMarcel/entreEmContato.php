<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <?php 
            require_once('../modulos/menu.php')
        ?>
            <div class="containerConteudo">
                <div id="containerContato">
                    <div id="containerTitulo"><h1 id="AlinhamentoEntreEmContato"> Entre em contato</h1></div>

                    <div id="primeiraLinha">
                        <div id="nome"> <h1>Nome:</h1></div>

                        <div id="areaDoNome">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                        <div id="telefone"> <h1>Telefone:</h1></div>

                        <div id="areaDoTelefone">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                    </div>
                    <div id="SegundaLinha">
                        <div id="celular"> <h1>Celular:</h1></div>

                        <div id="areaDoCelular">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                        <div id="email"> <h1>Email:</h1></div>

                        <div id="areaDoEmail">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                    </div>
                    <div id="TerceiraLinha">
                        
                    <div id="LinkFacebook"> <h1>Facebook:</h1></div>
                        <div id="areaDoFacebook">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                        <div id="homePage"> <h1>Home Page:</h1></div>

                        <div id="areaHomePage">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                    </div>
                    <div id="QuartaLinha">
                        
                    <div id="Profissao"> <h1>Profissão:</h1></div>
                        <div id="areaDaProfissao">
                            <input type="text" name="textNome" class="inputs">
                        </div>
                    </div>
                    
                    
                    <div class="mensagem">
                        <h4>Mensagem*</h4>
                        <textarea name="txaMensagem" id="mensagem" cols="40" rows="15">

                        </textarea>
                   </div>

                   <div class="criticas">
                       <br>
                        <h4>Sugestão/Criticas </h4>
                        <textarea name="txaCriticas" id="criticas" cols="40" rows="15">

                        </textarea>
                   </div>

                   <div class="sexo">
                       <br>
                           <h4>Sexo</h4>     
                            <input type="radio" name="rdoSexo"  value="M">Masculino
                            <input type="radio" name="rdoSexo"  value="F">Feminino
                            <input type="radio" name="rdoSexo"  value="O">Outro
                            <br>
                            <br>
                    </div> 
                </div>
                
                   <div class="enviarCritica">
                                 <input type="submit" value="Enviar" name="sbtEnviar">
                  </div> 
                  <div id="observacao">
                        <p>Itens com "*" e obrigatória a digitação</p>
                  </div>
                </div>
        <?php 
            require_once('../modulos/rodape.php')
        ?> 
</body>
</html>
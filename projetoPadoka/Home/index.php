<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Padoka</title>
    </head>
    <link rel="stylesheet" href="./style/style.css">
    <body>
        <!-- Cabeçalho -->
        <header class="conteinerCabecalho">
            <div class="conteinerCabecalhomini">
                <figure class="logo"><img src="../imgs/logo.png" alt="pani" ></figure>
                <!-- Menu DESKTOP-->
            <nav class="conteinerMenuDesk">
                <div class="itemMenu"><a href="../Home/index.php">Home</a></div>
                <div class="itemMenu"><a href="../Pagina2/index2.php">Quem somos</a></div>
                <div class="itemMenu"><a href="../">Curiosidades</a></div>
                <div class="itemMenu"><a href="../">Nossas Lojas</a></div>
                <div class="itemMenu"><a href="../Pagina3/index3.php">Fale conosco</a></div>
        
            </nav>
                <!-- Menu MOBILE --> 
            
            <nav class="conteinerMenuMoba">
            <div id="iconeMenu"></div>
                <div id="menuMoba">
                <ul>
                    <li class="itemMenu"><a href="../Home/index.php">Home</a></li>
                    <li class="itemMenu"><a href="../Pagina2/index2.php">Quem somos</a></li>
                    <li class="itemMenu"><a href="../">Curiosidades</a></li>
                    <li class="itemMenu"><a href="../">Nossas Lojas</a></li>
                    <li class="itemMenu"><a href="../Pagina3/index3.php">Fale conosco</a></li>
            
                </ul>
                </div>
                
            </nav>
                <!-- login -->
            <div class="conteinerForm">
                <form action="index.html" method="post" class="form">
                <div class="usuario"> Usuario:<br> <input type="text" name="usuario" class="inputs"></div>
                    <div class="senha">Senha:<br> <input type="password" name="senha" class="inputs"></div>
                    <div class="btnok"><input type="submit" value="Ok" class="btnOk"></div>
                </form>
            </div>
            </div>  
        </header>
        <!-- HOME -->
        <div class="conteinerGG">
            <div class="conteinerG">
                <!-- LADO -->
                <div class="ladoEsquedo"></div>
                <!-- CONTEUDO -->
                <div class="conteudoGG">   
                    <!-- <img src="images/01.jpg" class="imgMobile" alt="padaria"> -->
                    <figure class="subtituto"></figure>
                    <div class="slide">            
                    <div class="slide_nav">
                        <div class="slide_nav_item b"> >> </div>
                        <div class="slide_nav_item g"> << </div>
                        </div>
                        <?php
                        for($i=1;$i<=4;$i++) :
                            $slide=str_pad($i,2,0,STR_PAD_LEFT);
                            $primeiro=($i==1 ? 'primeiro':'');
                            
                        ?>
                        <article class="slide_item <?= $primeiro; ?>">
                            <img src="images/<?=$slide;?>.jpg" alt="[slide<?=$slide?>]" title="slide<?=$slide?>">
                        </article>
                        <?php endfor; ?>
                    </div>
                    <!-- PRODUTOS -->
                    <div class="produtosGG">
                        <div class="produtosG">
                            <div class="paginas">
                            <div class="pags">Produtos</div>
                            <div class="pags">Promoções</div>
                            <div class="pags">Produto do mês</div>
                            </div>
                            <div class="produtos">
                                <table id="produtosMoba">
                                    <tr>
                                        <td>
                                        <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                </table>
                                <table id="produtosDesk">
                                    <tr>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:#</span><br>
                                                <span>Descrisao:</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                        <td> 
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes"></td>
                                        <td>
                                            <figure class="foto"></figure>
                                            <div class="descrisaoProduto">
                                                <span>nome:##</span><br>
                                                <span>Descrisao:@@</span><br>
                                                <span>UR$199,00</span>
                                            </div>
                                            <input type="submit" value="Detalhes" class="detalhes">
                                        </td>
                                    </tr>
                                </table>    
                            </div>
                        </div>
                        <!-- RODAPÉ -->
                
                    </div>    
                </div>
                <!-- LADO -->
                <div class="ladoDireito">
                        <figure class="imglateral"><img src="images/redesocial1.png" title="facebook"></figure>
                        <figure class="imglateral1"><img src="images/redesocial2.png" title="instagram"></figure>
                        <figue class="imglateral2"><img src="images/redesocial3.png" title="whatsApp"></figue>     
                </div>
            </div> 
        
            
        </div>
        <footer class="rodape">
                        <input type="button" value="Sistema Interno" class="sistema">
                <span class="endereco">
                            endereço:xxxxxxx xxxxxxxxxxxxxx xxxxxxxxx  n°xxxx
                </span>
                <div class="appGG">
                    <figure class="app"></figure>
                        <input type="button" value="Baixe Nosso App" class="appbtn">
                </div>
        </footer>
    <script src="JS/jquery.js"></script>
    <script src="JS/main.js">
    </script>
    <script>
        // o $ significa a abraveiação de JQuerry
        $(document).ready(function(){
        //todos os codigos tem que estar aqui dentro(ex: tipo o main() do java)
            $('#iconeMenu').click(function(){
                // função para click no icone de menu 
                $('#menuMoba').fadeToggle(1000)
            }); 
            // função que faz o menu subir ao clicar non itemn do menu 
            $('.itemMenu').click(function(){
                $('#menuMoba').fadeOut()
            })
        });
    </script>
    
</body>
</html>
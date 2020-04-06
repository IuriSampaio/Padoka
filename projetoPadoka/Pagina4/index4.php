<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Padoka</title>
</head>
    <link rel="stylesheet" href="./style4.css">
    <script src="./jquery.js"></script>
    <script src="./main.js"></script>
<body>
    <!-- Cabeçalho -->
    <header class="conteinerCabecalho">
        <div class="conteinerCabecalhomini">
        <figure class="logo"><img src="../logo.png" alt="pani" ></figure>
            <!-- Menu DESKTOP-->
        <nav class="conteinerMenuDesk">
            <div class="itemMenu"><a href="../Home/index.php">HOME</a></div>
            <div class="itemMenu"><a href="../Pagina2/index2.php">QUEM</a></div>
            <div class="itemMenu"><a href="../Pagina3/index3.php">ALGO</a></div>
            <div class="itemMenu"><a href="../Pagina4/index4.php">NÃO</a></div>
        </nav>
            <!-- Menu MOBILE --> 
        
        <nav class="conteinerMenuMoba">
        <div id="iconeMenu"></div>
            <div id="menuMoba">
            <ul>
                <li class="itemMenu"><a href="../Home/index.php">HOME</a></li>
                <li class="itemMenu"><a href="../Pagina2/index2.php">QUEM</a></li>
                <li class="itemMenu"><a href="../Pagina3/index3.php">ALGO</a></li>
                <li class="itemMenu"><a href="../Pagina4/index4.php">Não</a></li>
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
                <div class="slide">
                   <div class="slide_nav">
                       <div class="slide_nav_item b"> >> </div>
              s         <div class="slide_nav_item g"> << </div>
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
                    <div class="quem">
                        <figure class="imagem-teste">
                            <img src="/images/fundo1.png" alt="im">
                        </figure>
                        <div class="texto">
                            <h1>Quem somos nós?</h1>
                            <p>isso aqui e pra escrever qualquer coisa para encgher espaço e nao parear de escrever aqui e falar um monte de cvois a do mun do sewm poew swe eiodbwytvbbqhnxbxuibxq x cyweqbvchwqeb uwyu uybw8c bwyb8 c 8 we  unw y8wbhuj wduyb</p>
                        </div> 
                    </div>
                        
                      <!-- RODAPÉ -->
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
                </div>    
            </div>
            <!-- LADO -->
            <div class="ladoDireito">
                    <div class="imglateral"><img src="./images/redesocial1.png" alt="facebook"></div>
                    <div class="imglateral"><img src="./images/redesocial2.png" alt="instagram" ></div>
                    <div class="imglateral"><img src="./images/redesocial3.png" alt="whats app"></div>     
            </div>
        </div> 
         
    </div>
    
   
    
</body>
</html>
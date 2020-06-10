<?php
        require_once('../header.php');
?>
<link rel="stylesheet" href="./style/style2.css">
    <!-- Quem Somos -->
    <div class="conteinerGG">
        <div class="conteinerG">
            <!-- LADO -->
            <div class="ladoEsquedo"></div>
            <!-- CONTEUDO -->
            <div class="conteudoGG">  
               
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
                    <section class="quem">
                        <figure class="imagem">
                            
                        </figure> 
                             
                        
                            <div class="texto">
                                <h3>História do nosso comercial</h3>
                                <p>Em um município chamado Codó, no estado do Maranhão, existe a emblemática Panificadora Alfa.</p>
                                <p>Um belo dia, o dono do estabelecimento pediu para um amigo produzir um comercial divulgando o comércio. De acordo com Gabriel, filho do dono, o produtor filmou algumas imagens da padaria e o resto fez em casa: gravou as próprias filhas falando sobre as delícias gastronômicas produzidas na panificadora</p>
                                <p>O resultado? Alguns interpretam como um fiasco, outros consideram a obra prima do mundo do marketing. Mas o fato é que a propaganda deu certo, cumprindo sua função de divulgar – e como! – a Panificadora Alfa. Em entrevista, Gabriel comenta que a padaria já era “a mais movimentada da região” e que, depois do comercial, as pessoas passaram a frequentá-la cada vez mais.</p>
                                <p>O vídeo do comercial é um viral de internet (um conteúdo único que se propaga pela rede com rapidez). A partir dele, vieram os memes (conteúdos ressignificados e reapropriados a partir da mensagem original). O principal meme gerado pela Panificadora Alfa é a catchphrase “chega a manteiga derrete”, utilizada pela “garota propaganda” para descrever o pão quentinho – e, posteriormente, ressignificada pelos internautas para se referir a algo muito prazeroso.</p>
                                <p> Além disso, algumas Image Macros contendo as falas das crianças e gifs de suas expressões caricatas também foram produzidas, propagadas e utilizadas por internautas em seus perfis.</p>
                                <p>Até a data desta postagem (junho de 2017), o vídeo original atingiu mais de 2 milhões de visualizações no YouTube. Já a ‘versão auto-tune’ da propaganda possui 5 milhões de acessos. Ambos foram e ainda são compartilhados através das redes sociais, assim como os memes. Além disso, a catchphrase acima mencionada é muitas vezes empregada em situações cotidianas, como em conversas, por exemplo. A página do Facebook da Panificadora Alfa também faz a alegria dos fãs da padaria com novos comerciais, esporadicamente – porém, nenhum tão bom quanto o original. Fotos dos produtos e páginas como “Por Onde Andam as Crianças da Panificadora Alfa” complementam o sucesso atingido pela campanha.</p>
                            </div> 
                        <figure class=" teste">
                        </figure>
                    </section>
                    <figure class="imagem-fundo">
                        <!-- <img src="./images/fundo2.jpg" alt="propaganda" srcset="propaganda"> -->
                    </figure>
                    <section class="conheca">
                        <div class="titulo"><h1>Visite nossas lojas</h1></div>
                        <div class="local1 lc">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3658.254064564883!2d-46.75881046019815!3d-23.523362808618497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1591824126105!5m2!1spt-BR!2sbr" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="local2 lc">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d228.68739625490403!2d-46.84877215822167!3d-23.496569282409858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1591824325493!5m2!1spt-BR!2sbr" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="local3 lc">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3657.386970691176!2d-46.92791225042938!3d-23.55454147611792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1591824439456!5m2!1spt-BR!2sbr" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                       <!--  <div class="redondinha">
                            <h2><a href="../pagina3/index3.php"> venha trabalhar conosco</a></h2> 
                        </div>
                        <div class="final">
                            <div class="local">
                                <div class="texto2">
                                    <p>aefuuiccu ebwuibiu bciuewb uidbewqu cuewibxb cbnueinw uiewb cuewib eui e</p>
                                </div>
                            </div>
                            <div class="outra">
                                <div class="texto2">
                                    <p>aefuuiccu ebwuibiu bciuewb uidbewqu cuewibxb cbnueinw uiewb cuewib eui e</p>
                                </div>
                            </div> -->
                    </section>
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
    <script src="./JS/jquery.js"></script>
    <script src="./JS/main.js"></script>
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
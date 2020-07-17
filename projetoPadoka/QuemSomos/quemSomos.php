<?php
    require_once('../header.php');
    require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka'); 
    $sql = "select * from tblQuemSomos order by idVersao desc";
     
    $comandoSelecionado = mysqli_query($conex,$sql);
   
    if ($rsQuemSomos = mysqli_fetch_assoc($comandoSelecionado)){
        $titulo = $rsQuemSomos['titulo'];
        $paragrafo1 = $rsQuemSomos['paragrafo1'];
        $paragrafo2 = $rsQuemSomos['paragrafo2'];
        $paragrafo3 = $rsQuemSomos['paragrafo3'];
        $paragrafo4 = $rsQuemSomos['paragrafo4'];
        $s01= $rsQuemSomos['slide1'];
        $s02= $rsQuemSomos['slide2'];
        $s03= $rsQuemSomos['slide3'];
        $s04= $rsQuemSomos['slide4'];

        $imgMoba = $rsQuemSomos['imgMoba'];
        $imgPropaganda = $rsQuemSomos['imgProgapanda'];

        $loja1 = $rsQuemSomos['loja1'];
        $loja2 = $rsQuemSomos['loja2'];
        $loja3 = $rsQuemSomos['loja3'];
        // echo ("<img src='../cms/filesQuemSomos/".$s1."'>");
        $s0= $s01;
    }

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
                        //$slide=str_pad($i,2,0,STR_PAD_LEFT);
                        $primeiro=($i==1 ? 'primeiro':'');
                        
                        if($s0==$s01){
                            $slide = $s0;
                            $s0=$s02;
                        }else if($s0 == $s02){
                            $slide = $s0;
                            $s0=$s03;
                        }else if($s0 == $s03){
                            $slide = $s0;
                            $s0=$s04;
                        }else if($s0 == $s04){
                            $slide = $s0;
                            $s0 =$s01;
                        }
                    ?>
                    <article class="slide_item <?= $primeiro; ?>">
                        <img src="../cms/filesQuemSomos/<?=$slide?>" alt="[slide<?=$slide?>]" title="slide<?=$slide?>">
                    </article>
                    <?php endfor; ?>
                </div>
                    <section class="quem">
                        <figure class="imagem">
                            <img src="../cms/filesQuemSomos/<?=$imgMoba?>" alt="padaria mobile" >
                        </figure> 
                             
                        
                            <div class="texto">
                                <h3><?=$titulo?></h3>
                                <p><?=$paragrafo1?></p>
                                <p><?=$paragrafo2?></p>
                                
                                <p><?=$paragrafo3?></p>
                                <p><?=$paragrafo4?></p>
                                <figure class=" teste">
                                    <img src="../cms/filesQuemSomos/<?=$imgPropaganda?>" alt="propaganda" >
                                </figure>
                            </div> 
                        
                    </section>
                    <figure class="imagem-fundo">  
                    </figure>
                    <section class="conheca">
                        <div class="titulo"><h1>Visite nossas lojas</h1></div>
                        <div class="local1 lc">
                        <iframe src="<?=$loja1?>" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="local2 lc">
                        <iframe src="<?=$loja2?>" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="local3 lc">
                        <iframe src="<?=$loja3?>" aria-hidden="false" tabindex="0"></iframe>
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
              
          <?php
            require_once('../footer.php');
          ?>
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
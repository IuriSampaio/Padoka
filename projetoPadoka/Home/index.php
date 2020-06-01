<?php
        require_once('../header.php');
?>
<link rel="stylesheet" href="./style/style.css">
        <!-- HOME -->
        <div class="conteinerGG">
            <div class="conteinerG">
                <!-- LADO -->
                <div class="ladoEsquedo"></div>
                <!-- CONTEUDO -->
                <div class="conteudoGG">   
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
                                <form action="index.php" method="post">
                                   <input type="submit" class="prod pags" name="produtos" value="produtos" >
                                   
                                    <input type="submit" class="prod pags" name="prodMes" value="Produtos do Mês">
                               
                                    <input type="submit" class="prod pags" name="promocoes" value="Promoções">
                                </form>
                            </div>
                            <div class="produtao">
                                <?php
                                    if (isset($_POST['produtos'])){
                                        require_once('./produtos.php');
                                    }
                                    else if(isset($_POST['prodMes'])){
                                        require_once('./prodMes.php');
                                    }
                                    else if(isset($_POST['promocoes'])){
                                        require_once('./promocoes.php');
                                    }else{
                                        require_once('./produtos.php');
                                    }
                                  
                                ?>
                            </div>
                        </div>
                        <!-- RODAPÉ -->
                
                    </div>    
                </div>
                <!-- LADO -->
                <div class="ladoDireito">
                        <figure class="imglateral"><img src="./images/redesocial1.png" title="facebook"></figure>
                        <figure class="imglateral1"><img src="./images/redesocial2.png" title="instagram"></figure>
                        <figue class="imglateral2"><img src="./images/redesocial3.png" title="whatsApp"></figue>     
                </div>
            </div> 
        
            
        </div>
       
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
    
<?php
        require_once('./menu2Moba.php');
        require_once('../footer.php');
?>
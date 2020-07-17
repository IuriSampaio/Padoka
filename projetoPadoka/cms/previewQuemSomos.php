<?php
   require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka'); 
if (isset($_POST['modo']) && $_POST['modo']=='vizualizar'){
    $id= $_POST['id'];
 
    $sql = "select * from tblQuemSomos where idVersao = ".$id;

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
}
?>

<style type="text/css">
        :root{
        --bg-principal:#23232e;
        --bg-segundario:#101010;
        --detalhes:blueviolet;
        --txt-principal:aliceblue;
        }
        a#fechar9{
            font-size: 50px;
            
        }
        a#fechar9:hover{
            background-color: white;
            cursor: pointer;
        }
        iframe{
        width: 520px;
        height: 520px;
        border-radius: 50%;
        
        }  
        .teste>img{
            
            background-size: cover;
            
            width: calc(100% / 1.3);
            margin-top: 45px;
           height: 530px;
            margin-left: 170px;
           background-repeat: no-repeat;
           background-size: contain;
        }
        img{
            width: 100%;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .conteinerGG{
            width: 100%;
            height: auto;
        }
        .conteinerG{
            width: 100%;
            height: auto;
            display: flex;
            margin-left: auto;
            margin-right: auto;
            align-items: center;
            justify-content: center;
        }
        .conteudoGG{
            width: 100%;
            height: auto;
            float: left;
            margin-left: 100px;;
            margin-top: 100px;
        }
        .mostrafotos{
            width: 100%;
            height: 500px;
            float: left;
        }
        
       
        /* slider */
        img{
            max-width: 100%;
            vertical-align: middle;
            background-attachment: fixed;
            background-size: contain;
        }
        .slide{
            float: left;
            width: 80%;
            margin-top: 1200px;
            margin-bottom: 1px;
            margin-left: 10%;
            position: relative;
        }
        .slide_nav{
            position: absolute;
            left: 0;
            top:50%;
            margin-top: -50px;
            width: 100%;
        }
        .slide_nav_item{
            position: absolute;
            padding: 15px 20px;
            background: var(--bg-principal);
            color: var(--detalhes);
            z-index: 1000;
            border-radius: 50%;
            font-weight: bold;
            font-size: 30px;
            font-family: monospace;
        }
        .slide_item{
            display: none;
        }
        .slide_nav_item:hover{
            background-color: var(--detalhes) ;
            color:var(--bg-principal);
            cursor: pointer;
        }
        .slide_nav_item.g{
            left: 10px;
        }
        .slide_nav_item.b{
            right: 10px;
        }
        .slide_item.primeiro{
            display: block;
        }
        /* sobre a empresa */
        
        .quem{
            width: 98%;
            float: left;
            height: 500px;
            background-color: var(--bg-principal);
            color: var(--txt-principal);
        }
        h1{
            width: 100%;
            box-sizing: border-box;
            color: var(--detalhes);
            font-size: 30px;
        }
        p{
            width: 100%;
            float: left;
            font-size: 20px;
            margin-top: 10px;
        }
        .texto{
            justify-content: center;
            margin-left: 10px;
            margin-right: 10px;
        }
        .imagem-teste{
            float: left;
            justify-content: center;
            align-items: center;
            width: 350px;
            height: 350px;
            margin-left: 20px;
            margin-top: 20px;
            margin-right: 30px;
            margin-bottom: auto;
        }
        .imagem-fundo{
            float: left;
            width:inherit;
            align-items: center;
            justify-content: center;
            height: 500px;
            position: static;
            display: grid;
        }
        .conheca{
            margin-top: 30px;

            width: inherit;
            height: 500px;
            display: flex;
            justify-content: space-between;
        }
        .titulo{
            text-align: center;
        }
        
        .final{
            margin-top: 240px;
        }
        .local, .outra{
            width: auto;
            height: 50px;
        }
        .local{
            float: left;
        }
        .outra{
            float: right;
        }
        .img{
            width: 50px;
            height: 50px;
            float: left;
            border: 1px solid var(--detalhes);
        }
</style>
 <script src="../QuemSomos/JS/jquery.js"></script>
    <script src="../QuemSomos/JS/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
                $('#fechar9').click(function(){
                    $('#conteinerModal9').fadeOut(1000);
                });
            });

    </script>
    <!-- Quem Somos -->
    <div class="conteinerGG">

   
        <div class="conteinerG">
          
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
                        <img src="filesQuemSomos/<?=$slide?>" alt="[slide<?=$slide?>]" title="slide<?=$slide?>">
                    </article>
                    <?php endfor; ?>
                </div>
                    <section class="quem"> 
                            <div class="texto">
                                <h3><?=$titulo?></h3>
                                <p ><?=$paragrafo1?></p>
                                <p><?=$paragrafo2?></p>
                                <p><?=$paragrafo3?></p>
                                <p><?=$paragrafo4?></p>
                                <figure class=" teste">
                                    <img src="filesQuemSomos/<?=$imgPropaganda?>" alt="propaganda" >
                                </figure>
                            </div> 
                        
                    </section>
                    <figure class="imagem-fundo">  
                    </figure>
                    <div class="titulo"><h1>Visite nossas lojas</h1></div>
                    <section class="conheca">
                        
                        <div class="local1 lc">
                        <iframe src="<?=$loja1?>" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="local2 lc">
                        <iframe src="<?=$loja2?>" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                        <div class="local3 lc">
                        <iframe src="<?=$loja3?>" aria-hidden="false" tabindex="0"></iframe>
                    </section>
                </div>    
            </div>
   
        </div>  
    </div>
      <a id="fechar9">x</a>
</body>
</html>
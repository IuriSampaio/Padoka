<?php
 require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka'); 
    $sql = "select * from tbl_curiosidade order by idcuriosidades desc";
     
    $comandoSelecionado = mysqli_query($conex,$sql);
   
    if ($rsCuriosidade = mysqli_fetch_assoc($comandoSelecionado)){
        $img1 = $rsCuriosidade['imgLoja1'];
        $img2 = $rsCuriosidade['imgLoja2'];
        $img3 = $rsCuriosidade['imgLoja3'];
        $txt1 = $rsCuriosidade['txtLoja1'];
        $txt2 = $rsCuriosidade['txtLoja2'];
        $txt3 = $rsCuriosidade['txtLoja3'];
    }
?>
<style type="text/css">
      .logo>img{
        width: 150px;
        height: 70px;
        margin-top: 10px;
        float: left;
    }
    /* menu DESKTOP */
    .conteinerMenuMoba, #produtosMoba{
        display: none;
    }
    .conteinerMenuDesk{
        width: 800px;
        height: 60px;
        margin-left: 30px;
        float: left;
    }
    .itemMenu{
        width: 120px;
        height: 45px;
        float: left;
        background-color: #23232e;
        border-radius: 10px;
        margin: 10px;
        font-size: 20px;
        text-align: center;
        font-family: Arial;
        color: white;
        display: block;
        padding-top: 10px;
    }
    .itemMenu:hover{
        background-color: darkgray;
        color: black;
        cursor: pointer;
        transition: 1s;
        display: block;
        height: 50px;
        width: 150px;
        font-size: x-large;
    }
    
    /* login */
    .conteinerForm{
        width: 600px;
        height: 60px;
        float: left;
    }
    .inputs{
        width: 200px;
        height: 25px;
        float: left;
    }
    .usuario{
        float: left;
    }
    .senha{
        float: left;
        margin-left: 20px;
    }
    .btnOk{
        width: 40px;
        height: 30px;
        float: left;
        border-radius: 10px;
        margin-left: 25px;
        margin-top: 17px;
    }

    /* conteudo */
   .conteinerG{
       width: 80%;
       height: auto;
       border:solid 0.5px transparent;
       margin-left: auto;
       margin-right: auto;
   }
   .titulo{
       width: 100%;
       height: 70px;
       font-size: 30px;
       border-radius: 30px;
       color: var(--txt-principal);
       background-color: var(--bg-segundario);
       text-align: center;
       margin-top: 130px;
   }
   .linha{
       width: 100%;
       height: auto;
   }
   .coluna-3{
       width: 30%;
       height: 500px;
       margin: 1.5%;
       background-color: white;
       float: left;
       border: 1px solid rgba(100, 0, 200, 0.6);
       box-shadow: 4px 2px 2px 3px rgba(100, 0, 200, 0.6);
       
   }
   .img{
       width: 230px;
       height: 230px;
       margin-top: 50px;
       margin-left: auto;
       margin-right: auto;
       /* background-color: black; */
   }
   .texto{
       width: 90%;
       margin-left: auto;
       margin-right: auto;
       margin-top: 20px;
   }
   .img>.pao>img{
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        background-size: cover;
   }
   .img>.paozao>img{
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        background-size: cover;
   }
   .img>.paozino>img{
        background-repeat: no-repeat;
        width: 100%;
        height: 100%;
        background-size: cover;
   }
   /* rodapé */
   .rodape{
        width: 100%;
        height: 200px;
        background-color: var(--bg-principal);
        float: left;
    }
    .sistema, .appbtn{
        float: left;
        width: 180px;
        height: 70px;
        margin-top: auto;
        margin-bottom: auto;
        border-radius: 17px;
        color: aliceblue;
        margin-top: 65px;
        margin-right: 30px;
        background-color: var(--detalhes);
    }
    .endereco{
        margin-top:90px;
        margin-left: 25%;
        float: left;
    }
    .appbtn{
        margin-top: 45px;
        margin-left: 30px;
        float: right;
    }
    .im>.cafe{
        width: 100%;
        float: left;
        height: 250px;
        background-image: url('../imgs/coffe.jpg');
    }
    /* Nossas Lojas */
    .conteinerLojas{
        width: 80%;
        height: auto;
        float: left;
        margin-left: 10%;
        margin-bottom: 20px;
    }
    .conteinerLojas>.titulo{
        float: left;
        margin-left: 20px;
        margin-right: auto;
    }
    .loja{
        width: 100%;
        float: left;
        margin-top: 25px;
        margin-left: auto;
        height: auto;
        padding: 20px;
        background-color: white;
        box-shadow:  4px 2px 2px 3px rgba(100, 0, 200, 0.6) ;
        border: 1px solid rgba(100, 0, 200, 0.6);

    }
    .imagemLoja>.loja1>img, .imagemLoja>.loja3>img{
        width: 550px;
        margin-left: 1%;
        margin-top: 1%;
        float: left;
        margin-right: 2%;
        height: 350px;
        background-repeat: no-repeat;
        background-size: cover;
    }   
    .loja>.descrisaoLoja{
        padding: 35px;
        color: var(--bg-segundario);  
    }
    .nomeLoja, .nomeLoja2{
        width: 100%;
        height: auto;
        color: var(--detalhes);
        font-size: xx-large;
        text-align: center;
        font-weight: bolder;
    }
    .nomeLoja2{
        max-width: 60%;
    }
    .imagemLoja>.loja2>img{
        width: 450px;
        margin-left: 1%;
        margin-bottom: 1%;
        float: right;
        margin-right: 2%;
        height: 350px;
        background-repeat: no-repeat;
        background-size: cover;
    }
    .loja>.descrisaoLoja2{
        float: left;
        width: 60%;
        padding: 35px;
    }
</style>
<script src="../JS/jquery.js"></script>
    <script type="text/javascript">
        //fechando modal com jim carey
            $(document).ready(function(){
                $('#fechar').click(function(){
                    $('#conteinerModal7').fadeOut(1000);
                });
                 

            });

    </script>
    <a id="fechar">x</a>
    
 <div class="conteinerG">
        
        <div class="linha">
            <div class="coluna-3">
                <div class="img"><figure class="pao">
                    <img src="../cms/filesCuriosidades/<?=$img1?>" alt="paozinho">
                </figure></div>
                <div class="texto">
                    <?=$txt1?>
                </div>
            </div>
            <div class="coluna-3">
                <div class="img"><figure class="paozao">
                    <img src="../cms/filesCuriosidades/<?=$img2?>" alt="paozinho">
                </figure></div>
                <div class="texto">
                <?=$txt2?>

                </div>
            </div>
            <div class="coluna-3">
                <div class="img"><figure class="paozino">
                    <img src="../cms/filesCuriosidades/<?=$img3?>" alt="paozinho">
                </figure></div>
                <div class="texto">
                <?=$txt3?>

                </div>
            </div>
        </div>
        
    </div>
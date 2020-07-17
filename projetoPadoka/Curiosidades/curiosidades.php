<?php
    require_once('../header.php');
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

    $sqli="select * from tbl_nossasLojas order by idLojas desc";

    $comando = mysqli_query($conex,$sqli);

    if($rsNossasLojas = mysqli_fetch_assoc($comando)){
        $titulo1 = $rsNossasLojas['titulo1'];
        $titulo2 = $rsNossasLojas['titulo2'];
        $titulo3 = $rsNossasLojas['titulo3'];
        
        $txtL1 = $rsNossasLojas['txtLoja1'];
        $txtL2 = $rsNossasLojas['txtLoja2'];
        $txtL3 = $rsNossasLojas['txtLoja3'];
        
        $imgL1 = $rsNossasLojas['imgLoja1'];
        $imgL2 = $rsNossasLojas['imgLoja2'];
        $imgL3 = $rsNossasLojas['imgLoja3'];


    }

?>
<link rel="stylesheet" href="./style/style.css">
<div class="conteinerGG">
    <div class="conteinerG">
        <div class="titulo">
            <h1>Curiosidades</h1>
        </div>
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
    <div class="linha">
            <div class="im">
                <figure class="cafe"></figure>
            </div>
        </div>
    <div class="conteinerLojas" id ="conteinerLojas">
        <div class="titulo">
            <h1>Nossas Lojas</h1>
        </div>
        <div class="loja">
            <div class="imagemLoja">
                <figure class="loja1">
                     <img src="../cms/filesNossasLojas/<?=$imgL1?>" alt="<?=$titulo1?>">
                </figure>
            </div>
            <h2 class="nomeLoja"> <?=$titulo1?> </h2>
            <div class="descrisaoLoja">
                <?=$txtL1?>
            </div>
        </div>
        <div class="loja">
            <h2 class="nomeLoja2"> <?=$titulo2?> </h2>
            <div class="descrisaoLoja2">
                <?=$txtL2?>
            </div>
            <div class="imagemLoja">
                <figure class="loja2">
                    <img src="../cms/filesNossasLojas/<?=$imgL2?>" alt="<?=$titulo2?>">
                 </figure>
            </div>
        </div>
        <div class="loja">
            <div class="imagemLoja">
                <figure class="loja3">
                    <img src="../cms/filesNossasLojas/<?=$imgL3?>" alt="<?=$titulo3?>">
                </figure>
            </div>
            <h2 class="nomeLoja"> <?=$titulo3?> </h2>
            <div class="descrisaoLoja">
                <?=$txtL3?>
            </div>
        </div>
    </div>
</div>
<script src="./JS/jquery.js"></script>
<script>
        $(document).ready(function(){
            $('#iconeMenu').click(function(){
                $('#menuMoba').fadeToggle(1000)
            }); 
            $('.itemMenu').click(function(){
                $('#menuMoba').fadeOut()
            })
        });
</script>
<?php
    require_once('../footer.php');
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
<?php
require_once('../FaleConosco/BD/banco.php');
$conex = conexaoMysql('padoka'); 
    
$action = '';
    if(isset($_POST['cms'])){
        $nome = $_POST['usuario'];
        $senha = $_POST['senha'];

        $senhaComp = md5($senha);
        echo($senhaComp);
        $sql = "SELECT  tbl_user.* , tbl_permicao.* FROM tbl_user, tbl_permicao 
        where nomeUsr = '".$nome."'AND senha = '".$senhaComp."' 
        and tbl_permicao.idPermicao = tbl_user.idPermicao;"; 

        $funcionarios = mysqli_query($conex,$sql);
                        
        if($rsFun = mysqli_fetch_assoc($funcionarios)){
            if($rsFun != []){
                if($_SESSION['atORdt'] == "desativado"){
                    echo "<script>alert('O usuario ".$nome." não tem permição')</script>";
                }else{
                    $action = '../cms/cms.php';    
                
                    session_start();
                    $_SESSION['nomeUsr'] = $rsFun['nomeUsr'];
                    $_SESSION['nomePerm'] = $rsFun['nomePermicao'];

                    $_SESSION['permAdmFun'] = $rsFun['adm_funcionario'];
                    $_SESSION['permAdmCon'] = $rsFun['adm_conteudo'];
                    $_SESSION['permAdmfale'] = $rsFun['adm_faleConosco'];
                    $_SESSION['permAdmProd'] = $rsFun['adm_produtos'];

                    echo "<script> location.href = '../cms/cms.php' </script>";           
            
                }
            }
        }
        
        
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Padoka</title>
    </head>
    
    <body>
        <!-- Cabeçalho -->
        <header class="conteinerCabecalho">
            <div class="conteinerCabecalhomini">
                <figure class="logo"><img src="../imgs/logo.png" alt="pani" ></figure>
                <!-- Menu DESKTOP-->
            <nav class="conteinerMenuDesk">
                <div class="itemMenu"><a href="../Home/index.php">Home</a></div>
                <div class="itemMenu"><a href="../QuemSomos/quemSomos.php">Quem somos</a></div>
                <div class="itemMenu"><a href="../Curiosidades/curiosidades.php">Curiosidades</a></div>
                <div class="itemMenu"><a href="../Curiosidades/curiosidades.php#conteinerLojas">Nossas Lojas</a></div>
                <div class="itemMenu"><a href="../FaleConosco/faleConosco.php">Fale conosco</a></div>
        
            </nav>
                <!-- Menu MOBILE --> 
            
            <nav class="conteinerMenuMoba">
            <div id="iconeMenu"></div>
                <div id="menuMoba">
                <ul>
                    <li class="itemMenu"><a href="../Home/index.php">Home</a></li>
                    <li class="itemMenu"><a href="../QuemSomos/quemSomos.php">Quem somos</a></li>
                    <li class="itemMenu"><a href="../Curiosidades/curiosidades.php">Curiosidades</a></li>
                    <li class="itemMenu"><a href="../Curiosidades/curiosidades.php#conteinerLojas">Nossas Lojas</a></li>
                    <li class="itemMenu"><a href="../FaleConosco/faleConosco.php">Fale conosco</a></li>
            
                </ul>
                </div>
                
            </nav>
                <!-- login -->
            <div class="conteinerForm">
                <form action="<?=$action?>" method="post" class="form">
                    <div class="usuario"> Usuario:<br> <input type="text" name="usuario" class="inputs"></div>
                    <div class="senha">Senha:<br> <input type="password" name="senha" class="inputs"></div>
                    <div class="btnok"><input type="submit" value="Ok" name="cms" class="btnOk"></div>
                </form>
                
            </div>
            </div>  
        </header>

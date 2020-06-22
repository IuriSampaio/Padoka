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
                <form action="../cms/cms.php" method="post" class="form">
                    <div class="usuario"> Usuario:<br> <input type="text" name="usuario" class="inputs"></div>
                    <div class="senha">Senha:<br> <input type="password" name="senha" class="inputs"></div>
                    <div class="btnok"><input type="submit" value="Ok" name="cms" class="btnOk"></div>
                </form>
                <?php
                    if(isset($_POST['cms'])){
                        require_once('../cms/cms.php');
                    }
                ?>
            </div>
            </div>  
        </header>

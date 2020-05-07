<?php
    require_once('BD/banco.php');
    $conex = conexaoMysql('padoka');
    //var_dump($conex);

    if(isset($_POST['btnSalvar'])){

            $nome = $_POST['nome'];
            $cep = $_POST['cep'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $email = $_POST['email'];
            $url = $_POST['url'];
            $nascimento = explode("/",$_POST['dataNasc']);
            $nascimentoAmericano = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];
            $critica = $_POST['critica'];
            $idEstado = $_POST['estados'];


            $sqli = "insert into criticas values (Default,'".$nome."',
            '".$nascimentoAmericano."',".$idEstado.",'".$cep."','".$bairro."',
            '".$cidade."','".$url."','".$email."','".$critica."' )";
            //     echo($sqli);
            if(mysqli_query($conex,$sqli))
                 echo("<script> console.log('inserido com suscesso') </script>");
             else
                 echo("<script> alert('erro') </script>");
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Padoka</title>
    </head>
    <link rel="stylesheet" href="./style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="./main.js"></script>
<body>
    <!-- Cabeçalho -->
    <header class="conteinerCabecalho">
        <div class="conteinerCabecalhomini">
        <figure class="logo"><img src="../imgs/logo.png" alt="pani" ></figure>
            <!-- Menu DESKTOP-->
        <nav class="conteinerMenuDesk">
            <div class="itemMenu"><a href="../Home/index.php">HOME</a></div>
            <div class="itemMenu"><a href="../Pagina2/index2.php">QUEM SOMOS</a></div>
            <div class="itemMenu"><a href="../Pagina3/index3.php">FALE CONOSCO</a></div>
        
        </nav>
            <!-- Menu MOBILE --> 
        
        <nav class="conteinerMenuMoba">
        <div id="iconeMenu"></div>
            <div id="menuMoba">
            <ul>
                <li class="itemMenu"><a href="../Home/index.php">HOME</a></li>
                <li class="itemMenu"><a href="../Pagina2/index2.php">QUEM SOMOS</a></li>
                <li class="itemMenu"><a href="../Pagina3/index3.php">FALE CONOSCO</a></li>
        
            </ul>
            </div>
            
        </nav>
            <!-- login -->
        <div class="conteinerForm">
            <form action="index.html" method="post" class="form-inline">
               <div class="usuario">Usuario:<br> <input type="text" name="usuario" class="inputs"></div>
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
                    <div class="cadastro">
                    <div class="tituloFale">
                            Fale Conosco
                    </div>
                        <form action="index3.php" method="post" class ="form-group form2">
                            <div class="row">
                            <label for="form-control" class="font">Nome:</label>
                            <input type="text" name="nome" placeholder="Digite seu nome" class="form-control" required>
                            </div>
                            <div class="row top">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form-control" class="font">Data de Nascimento:</label>
                                        <input type="text" name="dataNasc" class="form-control" id="outra_data" maxlength="10" onkeypress="mascaraData( this, event )">
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form">
                                        <label for="form-control" class="font">CEP:</label>
                                        <input type="text" name = "cep" placeholder="Digite seu CEP" class="form-control" id ='cep'>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="row top">
                                <div class="col-md-4">
                                    <label for="" class="font">Estado:</label>
                                    <select name="estados" id="estados" class="form-control" id="estado">
                                        <option value="" selected >Selecione um estado</option>
                                        <?php
                                        $sql = "select * from estados orderbyname" ;
                                        $selecionaEstados = mysqli_query($conex,$sql) ;
                                while( $rsEstados = mysqli_fetch_assoc($selecionaEstados)){
                            ?>
                                <option value="<?=$rsEstados['idEstado']?>"><?=$rsEstados['nome']?></option>
                            <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for=""class="font">Bairro:</label>
                                    <input type="text" name= "bairro" placeholder="Digite seu bairro" class="form-control" id ="bairro">
                                </div>
                                <div class="col-md-4">
                                    <label for="" class="font">Cidade:</label>
                                    <input type="text" name= "cidade" placeholder="digite sua cidade" class=form-control id ="cidade">
                                </div>
                            </div>
                            <div class="row top">
                                <label for="url" class="font">Digite sua URL:</label>
                            <input type="url" name="url"placeholder="Digite a url do seu site" class="form-control">
                            </div>
                            <div class="row top">
                                <label for="email" class="font">Digite seu email:</label>
                            <input type="mail" name="email" placeholder="Digite seu email" class="form-control" required>
                            </div>
                                
                            <div class="row top">
                                <label for="comment" class="font">Comentario ou crítica:</label>
                                    <textarea class="form-control" name="critica" rows="5" id="comment" placeholder="faça um comentario ou critica sobre a sua experiencia ao visitar o site ou a nossa padaria" required></textarea>
                            </div>
                            <div class="row">
                        <input type="submit" name="btnSalvar"class="btn top form-control enviar">
                    </div>
                    </form>
                    </div> 
                
                <!-- LADO -->
                <div class="ladoDireito">
                        <!-- <div class="imglateral"><img src="./images/redesocial1.png" alt="facebook" ></div>
                        <div class="imglateral"><img src="./images/redesocial2.png" alt="instagram" ></div>
                        <div class="imglateral"><img src="./images/redesocial3.png" alt="whats app"></div>      -->
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

<script src="./postmon.js">
    
</script>
<script src="jquery.js"></script>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
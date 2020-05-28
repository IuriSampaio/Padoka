<?php
    require_once('BD/banco.php');
    $conex = conexaoMysql('padoka');
    //var_dump($conex);

    if(isset($_POST['btnSalvar'])){

            $nome = $_POST['nome'];
            $nascimento = explode("/",$_POST['dataNasc']);
            $cep = $_POST['cep'];
            $idEstado = $_POST['estados'];
            $bairro = $_POST['bairro'];
            $cidade = $_POST['cidade'];
            $facebook = $_POST['face'];
            $url = $_POST['url'];
            $telefone = $_POST['tel'];
            $celular = $_POST['cel'];
            $email = $_POST['email'];
            $idsexo = $_POST['slcSex'];
            $profisao = $_POST['profisao'];
            $tipoMsg = $_POST[ 'slcSugCri'];
            $critica = $_POST['critica'];

            //mascarando o nascimento
            $nascimentoAmericano = $nascimento[2]."-".$nascimento[1]."-".$nascimento[0];

            

            $sqli = "insert into tbl_criticas values (Default,'".$nome."',
            '".$nascimentoAmericano."','".$cep."','".$idEstado."','".$bairro."',
            '".$cidade."','".$facebook."','".$url."','".$telefone."','".$celular."','".$email."',
            '".$idsexo."','".$profisao."','".$tipoMsg."','".$critica."' )";
                 
            if(mysqli_query($conex,$sqli))
                 echo("<script> console.log('inserido com suscesso') </script>");
             else
                 echo($sqli."<script> alert('erro') </script>");
        
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <!-- <meta name="viewport" content="width=device-width, initial-scale=0"> -->
        <meta charset="UTF-8">
        <title>Padoka</title>
    </head>
    <link rel="stylesheet" href="./style/style3.css">
    <script src="./main.js"></script>
<body>
    <!-- Cabeçalho -->
    <header class="conteinerCabecalho">
        <div class="conteinerCabecalhomini">
        <figure class="logo"><img src="../imgs/logo.png" alt="pani" ></figure>
            <!-- Menu DESKTOP-->
        <nav class="conteinerMenuDesk">
            <div class="itemMenu"><a href="../Home/index.php">Home</a></div>
            <div class="itemMenu"><a href="../Pagina2/index2.php">Quem somos</a></div>
            <div class="itemMenu"><a href="../">Curiosidades</a></div>
            <div class="itemMenu"><a href="../">Nossas Lojas</a></div>
            <div class="itemMenu"><a href="../Pagina3/index3.php">Fale conosco</a></div>
        
        </nav>
            <!-- Menu MOBILE --> 
        
        <nav class="conteinerMenuMoba">
        <div id="iconeMenu"></div>
            <div id="menuMoba">
            <ul>
                    <li class="itemMenu"><a href="../Home/index.php">Home</a></li>
                    <li class="itemMenu"><a href="../Pagina2/index2.php">Quem somos</a></li>
                    <li class="itemMenu"><a href="../">Curiosidades</a></li>
                    <li class="itemMenu"><a href="../">Nossas Lojas</a></li>
                    <li class="itemMenu"><a href="../Pagina3/index3.php">Fale conosco</a></li>
        
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
                        <form action="index3.php" method="post" class ="formulario">
                            <div class="linha">
                            <label for="form-control" class="font">Nome:</label>
                            <input type="text" name="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="linha">
                                <div class="coluna-2">
                                    <div>
                                        <label for="form-control" class="font">Data de Nascimento:</label>
                                        <input type="text" name="dataNasc" class="dt" id="outra_data" maxlength="10" onkeypress="mascaraData( this, event )">
                                    </div> 
                                </div>
                                <div class="coluna-2">
                                    <div>
                                        <label for="form-control" class="font">CEP:</label>
                                        <input type="text" name = "cep" placeholder="Digite seu CEP" class="dt" id ='cep'>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="linha">
                                <div class="coluna-3">
                                    <label for="" class="font">Estado:</label>
                                    <select name="estados" id="estados" id="estado">
                                        <option value="" selected >Selecione um estado</option>
                                        <?php
                                        $sql = "select * from estados orderbyname" ;
                                        $selecionaEstados = mysqli_query($conex,$sql) ;
                                            while( $rsEstados = mysqli_fetch_assoc($selecionaEstados)){?>
                                        <option value="<?=$rsEstados['idEstado']?>"><?=$rsEstados['nome']?></option>
                                            <?php } ?>
                                    </select>
                                </div>
                                <div class="coluna-3">
                                    <label for=""class="font">Bairro:</label>
                                    <input type="text" name= "bairro" placeholder="Digite seu bairro" id ="bairro">
                                </div>
                                <div class="coluna-3">
                                    <label for="" class="font">Cidade:</label>
                                    <input type="text" name= "cidade" placeholder="digite sua cidade"id ="cidade">
                                </div>
                            </div>
                            <div class="linha">
                                <label for="url" class="font">Digite o link do facebook:</label>
                                <input type="url" name="face"placeholder="http://....">
                            </div>
                            <div class="linha">
                                <label for="url" class="font">Homepage:</label>
                                <input type="url" name="url"placeholder="http://....">
                            </div>
                            <div class="linha">
                                <div class="coluna-2">
                                    <div>
                                        <label for="form-control" class="font">Telefone:</label>
                                        <input type="text" name="tel" placeholder="5555-5555" class="dt" id="outra_data" maxlength="13">
                                    </div> 
                                </div>
                                <div class="coluna-2">
                                    <div>
                                        <label for="form-control" class="font">Celular:</label>
                                        <input type="text"name="cel" placeholder="95555-5555" class="dt" maxlength="14" >
                                    </div>
                                </div>
                            </div>
                            <div class="linha">
                                <label for="email" class="font">E-mail</label>
                                <input type="mail" name="email" placeholder="Digite seu email"  required>
                            </div>
                            <div class="linha">
                                <div class="coluna-2">
                                    <label for="slcSex">Escolha seu sexo</label>
                                    <div>
                                    <select name="slcSex" id="slcSex">
                                    <option value ="#" type="text" selected> Escolha seu sexo</option>
                                        <?php
                                        $sql = "select * from tbl_sexo orderbyname" ;
                                        $selecionaSexo = mysqli_query($conex,$sql) ;
                                            while( $rsSexo = mysqli_fetch_assoc($selecionaSexo)){?>
                                        <option value="<?=$rsSexo['idSexo']?>"><?=$rsSexo['nomeSexo']?></option>
                                            <?php } ?>
                                    </select>
                                    </div>
                                </div>
                                <div class="coluna-2">
                                    <label for="profisao">Profisão</label>
                                    <input type="text" name="profisao" placeholder="digite sua profisão" id="profisão">
                                </div>
                                
                            </div>
                            <div class="linha">
                                <label for="slcSugCri">Sugestão ou Critica</label>
                                <select name="slcSugCri" id="slcSugCri">
                                    <option value ="#" type="text" selected>Escolha se deseja fazer uma sugestão,
                                         critica ou candidatura á vaga de trabalho</option>
                                    <option type="text" name="S" value="S">Sugestão</option>
                                    <option value="C" name="C" type="text">Crítica</option>
                                    <option value="T" name="T" type="text">Candidatura á a vaga de emprego</option>
                                </select>
                            </div>
                            <div class="linha">
                                <label for="comment" class="font">Comentarios, críticas, sugestões ou candidatura á emprego:</label>
                                    <textarea  name="critica" rows="5" id="comment" placeholder="faça um comentario ou critica sobre a sua experiencia ao visitar o site ou a nossa padaria" required></textarea>
                            </div>
                            <div class="linha">
                        <input type="submit" name="btnSalvar"class="enviar">
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

<script src="./JS/postmon.js">
    
</script>
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
</body>
</html>
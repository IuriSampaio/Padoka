<?php
if (isset($_GET['modo']) && $_GET['modo'] == 'atualizar'){
    require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka'); 
    
    if(isset($_POST['btnEnviaFuncionario'])){
              
        $id = $_GET['id'];
            $nome = $_POST['nomeFuncinario'];
            $email = $_POST['emailFuncinario'];
            $telefone = $_POST['telefoneFuncinario'];
            $cpf = $_POST['cpfFuncinario'];
            $senha = $_POST['senhaFuncinario'];
            $idPermicao = $_POST['slcNivel'];
                
        $sqli = "update tbl_user set
                    nomeUsr ='".$nome."',
                    telefone='".$telefone."',
                    email='".$email."',
                    CPF ='".$cpf."',
                    senha = '".$senha."',
                    idPermicao = '".$idPermicao."'
                    where idUsr = ".$id;
               
                    if(mysqli_query($conex,$sqli))
                        echo("
                        <script> 
                        console.log('inserido com suscesso');
                        location.href = './cmsAdmFuncionario.php'
                        </script>
                        ");
                    else
                        echo("
                        <script> 
                        alert('erro".$sqli."') 
                        window.history.back();
                        location.href = './cmsAdmFuncionario.php'
                        </script>
                        ");
                }
    }
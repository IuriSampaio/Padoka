<?php
	require_once('../FaleConosco/BD/banco.php');
	$conex = conexaoMysql('padoka'); 
	


	if(isset($_POST['btnEnviaFuncionario'])){
		$nome = $_POST['nomeFuncinario'];
		$email = $_POST['emailFuncinario'];
		$telefone = $_POST['telefoneFuncinario'];
		$cpf = $_POST['cpfFuncinario'];
		$senha = $_POST['senhaFuncinario'];
		$idPermicao = $_POST['slcNivel'];
		$senhaCrip = md5($senha);
		$sql = "insert into tbl_user values (DEFAULT,'".$nome."','".$email."','".$telefone."','".$cpf."','".$senhaCrip."','".$idPermicao."')";
		if(mysqli_query($conex,$sql)){
			 echo("
                        <script> 
                        console.log('inserido com suscesso');
                        location.href = 'cmsAdmFuncionario.php'
                        </script>
                ");
		}else{
			 echo("
                        <script> 
                        alert('erro: '".$sql."') 
                        window.history.back();
                        location.href = 'cmsAdmFuncionario.php'
                        </script>
                ");
		}
	}

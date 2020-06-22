<?php
	require_once('../FaleConosco/BD/banco.php');
	$conex = conexaoMysql('padoka'); 

	if (isset($_POST['btnPerm']) ){

		$nomePermicao = $_POST['nomePermicao'];
		
		$admUsuarios = $_POST['admUsuarios']  ? 1 : 0;
		$admConteudo = $_POST['admConteudo'] ? 1 : 0;
		$admFaleConosco = $_POST['admFaleComNois'] ? 1 : 0;
		$admProdutos = $_POST['admProdutos'] ? 1 : 0;

		$sql = "insert into tbl_permicao values 
		(DEFAULT,'".$nomePermicao."',".$admUsuarios .",".$admConteudo.",". $admFaleConosco.",".$admProdutos.")";
		
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
                        alert('erro') 
                        window.history.back();
                        location.href = 'cmsAdmFuncionario.php'
                        </script>
                        ");
                }
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Novo nivel</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="./cms.css">
	<script src="jQuery.js"></script>
    <script type="text/javascript">
    	//fechando modal com jim carey
 			$(document).ready(function(){
               	$('#fechar2').click(function(){
               		$('#conteinerModal2').fadeOut(1000);
               	});
           	});

    </script>
	<a id="fechar2">X</a>

	
	<form action="cmsNewNivel.php" method="post">
		<div class="check">
			<div class=line>
				<input type="text" name="nomePermicao" class="inpPerm" placeholder="Nome para a permição. ex: Adiministrador, Cataloguista etc...">
			</div>
			<div class="line">
				<h4> ADM. Usuarios: </h4>
					<input type="checkbox" class="marca" id="admUsuarios" name="admUsuarios" value="U">
				<label for="admUsuarios"></label>
			</div>
			<div class="line">
				<h4> ADM. Conteudo: </h4>
					<input type="checkbox" class="marca" id="admConteudo" name="admConteudo" value="C">
					<label for="admConteudo"></label>
			</div>
			<div class="line">
				<h4> ADM. Fale Conosco: </h4>
					<input type="checkbox" class="marca" id="admFaleComNois" name="admFaleComNois" value="F">
					<label for="admFaleComNois"></label>
			</div>
			<div class="line">
				<h4> ADM. Produtos: </h4>
					<input type="checkbox" class="marca" id="admProdutos" name="admProdutos" value="P">
					<label for="admProdutos"></label>
			</div>
			<input type="submit" name="btnPerm" class="btnEnv" value="Cadastrar">
		</div>

	</form>
		
	
</body>
</html>
<?php

if(isset($_POST['modo']) && $_POST['modo'] == 'vizualizar' && isset($_POST['id']))
{
	require_once('../FaleConosco/BD/banco.php');
	$conex = conexaoMysql('padoka'); 

	$id = $_POST['id'];
	$sql =" select tbl_user.*, tbl_permicao.idPermicao, tbl_permicao.nomePermicao from tbl_user, tbl_permicao 
		where tbl_permicao.idPermicao = tbl_user.idPermicao 
		and idUsr = ".$id;

    $comandoSQL = mysqli_query($conex, $sql);
    
    if($rsFuncionario = mysqli_fetch_assoc($comandoSQL)){
    	$nome = $rsFuncionario['nomeUsr'];
        $cpf = $rsFuncionario['CPF'];
        $email = $rsFuncionario['email'];
		$telefone = $rsFuncionario['telefone'];
		$senha = $rsFuncionario['senha'];
        $permicao = $rsFuncionario['nomePermicao'];
        }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vizualizar Funcionario</title>
</head>
  	<script src="../JS/jquery.js"></script>
    <script type="text/javascript">
    	//fechando modal com jim carey
 			$(document).ready(function(){
               	$('#fechar').click(function(){
               		$('#conteinerModal5').fadeOut(1000);
               	});
               	$('.fecha').click(function(){
               		$('#conteinerModal5').fadeOut(1000);
               	});

           	});


           	const ativar = document.getElementById('ativar')
           	const desativar = document.getElementById('desativar')


           	desativar.addEventListener('click',()=>{
           		alert('usuario <?=$nome?> desativado')
           		<?php
           			if(isset($_POST['desativar'])){

           				$_SESSION['nomeUsr'] = $nome;
           				$_SESSION['atORdt'] = "desativado";
           			//$_SESSION['user']= [$_SESSION['nomeUsr'],$_SESSION['atORdt']];
           			
           			}
           			
           		?>
           	})

           	ativar.addEventListener('click',()=>{
           		alert('usuario <?=$nome?> ativado')
           		<?php
           			if (isset($_POST['ativar'])) {
           				$_SESSION['nomeUsr'] = $nome;
           				$_SESSION['atORdt'] = "ativado";
           				
           			}
           			//$_SESSION['user']= [$_SESSION['nomeUsr'],$_SESSION['atORdt']];
           			
           		?>
           	})

    </script>
<body>
	<a id="fechar">x</a>
	<table id="vizualizar">
		<tr>
			<td colspan="2" class="coluna" id="titu"><?= $nome ?></td>
		</tr>
		<tr>
			<td class="coluna">CPF:</td>
			<td class="coluna"><?=$cpf?></td>
		</tr>
		<tr>
			<td class="coluna">email:</td>
			<td class="coluna"><?=$email?></td>
		</tr>
		<tr>
			<td class="coluna">Telefone:</td>
			<td class="coluna"><?=$telefone?></td>
		</tr>
		<!-- <tr>
			<td class="coluna">Senha:</td>
			<td class="coluna"><?=$senha?></td>
		</tr> -->
		<tr>
			<td class="coluna">Permição:</td>
			<td class="coluna"><?=$permicao?></td>
		</tr>


	</table>
	<form method="post">
		<button name="ativar" id="ativar" class="fecha">Ativar Funcionario</button>
		<button name="desativar" id="desativar" class="fecha">Desativar Funcionario</button>	
	</form>
	
</body>
</html>
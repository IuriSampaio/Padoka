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
           	});

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
		<tr>
			<td class="coluna">Senha:</td>
			<td class="coluna"><?=$senha?></td>
		</tr>
		<tr>
			<td class="coluna">Permição:</td>
			<td class="coluna"><?=$permicao?></td>
		</tr>
	</table>
</body>
</html>
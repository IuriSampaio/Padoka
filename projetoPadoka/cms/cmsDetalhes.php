<?php

if(isset($_POST['modo']) && $_POST['modo'] == 'vizualizar' && isset($_POST['id']))
{
	require_once('../FaleConosco/BD/banco.php');
	$conex = conexaoMysql('padoka'); 

	$id = $_POST['id'];
	$sql = "select tbl_criticas.* , estados.nome as nomeEstado,
		estados.sigla, estados.idEstado , tbl_sexo.* 
        from tbl_criticas, estados, tbl_sexo 
        where estados.idEstado = tbl_criticas.idEstado
        and tbl_sexo.idSexo = tbl_criticas.idSexo
        and tbl_criticas.idCritica =".$id;

    $comandoSQL = mysqli_query($conex, $sql);
    
    if($rsContatos = mysqli_fetch_assoc($comandoSQL)){
    	$nome = $rsContatos['nome'];
    	$cidade = $rsContatos['cidade'];
        $bairro = $rsContatos['bairro'];
        $cep = $rsContatos['cep'];
        $email = $rsContatos['email'];
		$telefone = $rsContatos['telefone'];
		$celular = $rsContatos['celular'];
		$facebook = $rsContatos['facebookURL'];
		$homepage = $rsContatos['homePageURL'];
		$profisao = $rsContatos['profisao'];

		$nascimento = explode("-",$rsContatos['dtNasc']);
        $dtNascBra = $nascimento[2]."/".$nascimento[1]."/".$nascimento[0];
        
        $sexo = $rsContatos['nomeSexo'];
        $tipoCritica = $rsContatos['tipoCritica'];
        $critica = $rsContatos['critica'];
        
        $nomeEstado = $rsContatos['nomeEstado'];
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Vizualizar Contatos</title>
</head>
	<link rel="stylesheet" type="text/css" href="cms.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  	<script src="jQuery.js"></script>
    <script type="text/javascript">
    	//fechando modal com jim carey
 			$(document).ready(function(){
               	$('#fechar').click(function(){
               		$('#conteinerModal').fadeOut(1000);
               	});
           	});

    </script>
<body>
	<a id="fechar">X</a>
	<a class="email fas fa-mail-bulk" ></a> 
	<table id="vizualizar">
		<tr>
			<td colspan="2" class="coluna" id="titu"><?= $nome ?></td>
		</tr>
		<tr>
			<td class="coluna">Estado:</td>
			<td class="coluna"><?=$nomeEstado?></td>
		</tr>
		<tr>
			<td class="coluna">Cidade:</td>
			<td class="coluna"><?=$cidade?></td>
		</tr>
		<tr>
			<td class="coluna">Bairro:</td>
			<td class="coluna"><?=$bairro?></td>
		</tr>
		<tr>
			<td class="coluna">CEP:</td>
			<td class="coluna"><?=$cep?></td>
		</tr>
		<tr>
			<td class="coluna">Telefone:</td>
			<td class="coluna"><?=$telefone?></td>
		</tr>
		<tr>
			<td class="coluna">Email:</td>
			<td class="coluna"><?=$email?></td>
		</tr>
		<tr>
			<td class="coluna">Celular:</td>
			<td class="coluna"><?=$celular?></td>
		</tr>
		<tr>
			<td class="coluna">Data de Nascimento:</td>
			<td class="coluna"><?=$dtNascBra?></td>
		</tr>
		<tr>
			<td class="coluna">Sexo:</td>
			<td class="coluna"><?=$sexo?></td>
		</tr>
		<tr class="maior">
			<?php 
                    if ($tipoCritica == 'T'){
                        $tipoCritica = 'Pedido de emprego:';
                    }else{
                    ($tipoCritica == 'S')? $tipoCritica = 'Sugestão:' : $tipoCritica = 'Critica:';} 
                    ?>
			<td class="coluna"><?=$tipoCritica?></td>
			<td class="coluna"><?=$critica?></td>
		</tr>
	</table>
</body>
</html>
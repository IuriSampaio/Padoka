<?php
	require_once('../FaleConosco/BD/banco.php');
	$conex = conexaoMysql('padoka'); 

	$sql = "select * from tbl_permicao";

	$selecionaPermicoes = mysqli_query($conex,$sql) ;
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gerencia de niveis</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="./cms.css">
	<script src="jQuery.js"></script>
    <script type="text/javascript">
    	//fechando modal com jim carey
 			$(document).ready(function(){
               	$('#fechar2').click(function(){
               		$('#conteinerModal3').fadeOut(1000);
               	});
               	$('.editarNivel').click(function(){
               		$('#conteinerModal4').fadeIn(700);
               	})
           	});

           	function editarNivel(idPermicao){
	     		$.ajax({
	     			type:"POST",
	     			url: "editarNivel.php",
	     			data:{id:idPermicao,modo:'editarNivel'},
	     			success: function(dados){
	     				$('#modal4').html(dados);
	     			}
	     		});
     		}

    </script>
    <div id="conteinerModal4">
    	<div id="modal4"></div>
    </div>
	<a id="fechar2">X</a>
	<table>
		<tr >
			<td  colspan="6" class="titulofun top">Niveis</td>
		</tr>
		<tr>
			<td>Nome Permição</td>
			<td>ADM. Funcionario</td>
			<td>ADM. Conteudo</td>
			<td>ADM. Fale Conosco</td>
			<td>ADM. Produtos</td>
			<td>Opções</td>
		</tr>
		<?php
				 while( $rsPermicoes = mysqli_fetch_assoc($selecionaPermicoes)){
					$funcionario =	$rsPermicoes['adm_funcionario'] ==1 ? "pode mexer" : "não pode mexer";
					$conteudo = $rsPermicoes['adm_conteudo'] ==1 ? "pode mexer" : "não pode mexer";
					$fala = $rsPermicoes['adm_faleConosco']==1 ? "pode mexer" : "não pode mexer";
					$produtos = $rsPermicoes['adm_produtos']==1 ? "pode mexer" : "não pode mexer";
			?>
		<tr>
			
			<td><?=$rsPermicoes['nomePermicao']?></td>
			<td><?= $funcionario ?></td>
			<td><?=$conteudo?></td>
			<td><?=$fala?></td>
			<td><?=$produtos?></td>
			<td>
		
				<a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
                   href="cmsDeletaNivel.php?modo=excluir&id=<?=$rsPermicoes['idPermicao']?>"></a>
                <a class="editarNivel fas fa-edit" onclick="editarNivel(<?=$rsPermicoes['idPermicao']?>);"></a>
			</td>
		</tr>
		<?php }?>
	</table>

</body>
</html>
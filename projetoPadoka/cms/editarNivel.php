<?php
if(isset($_POST['modo']) && $_POST['modo'] == 'editarNivel' && isset($_POST['id'])){
		require_once('../FaleConosco/BD/banco.php');
        $conex = conexaoMysql('padoka');

        $id = $_POST['id'];
       
   	if (isset($_POST['btnEnvNivel']) ){
   		echo"<script>alert('fmovmsvms')</script>";
		$nomePermicao = $_POST['nomePermicao'];
		
		$admUsuarios = $_POST['admUsuarios']==checked  ? 1 : 0;
		$admConteudo = $_POST['admConteudo']==checked ? 1 : 0;
		$admFaleConosco = $_POST['admFaleComNois']==checked ? 1 : 0;
		$admProdutos = $_POST['admProdutos']==checked ? 1 : 0;

		 $sqli = "update tbl_permicao set
                    nomePermicao ='".$nomePermicao."',
                    adm_funcionario=".$admUsuarios.",
                    adm_conteudo=".$admConteudo.",
                    adm_faleConosco= ".$admFaleConosco.",
                    adm_produtos=".$admProdutos."
                    where idPermicao = ".$id;


        echo"<script>alert(".$sqli.")</script>";
		if(mysqli_query($conex,$sqli)){
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
	<title>editar níveis</title>
</head>
<link rel="stylesheet" type="text/css" href="cms.css">
<body>
	
	<script src="jQuery.js"></script>
    <script type="text/javascript">
    	//fechando modal com jim carey
 			$(document).ready(function(){
               	$('#fechar4').click(function(){
               		$('#conteinerModal4').fadeOut(1000);
               	});
           	});

    </script>

	<a id="fechar4">X</a>

	<?php
			$sql = "select * from tbl_permicao where idPermicao = ".$id;
        	$pegaPermicao = mysqli_query($conex,$sql);
		    if($rsPermicoes = mysqli_fetch_assoc($pegaPermicao)){

        	$prod = $rsPermicoes['adm_produtos'] ? 'checked' : ' ';
        	$cont = $rsPermicoes['adm_conteudo'] ? 'checked' : ' ';
        	$usu = $rsPermicoes['adm_funcionario'] ? 'checked' : ' ';
        	$fale = $rsPermicoes['adm_faleConosco'] ? 'checked' : ' ';

	?>
	<h2 style="text-align: center;font-size: 70px;"><?= $rsPermicoes['nomePermicao']?></h2>

	<form method="post" action="editarNivel.php">
			<div class="line">
				<h4> ADM. Usuarios: </h4>
					<input type="checkbox" class="marca" id="admUsuarios" name="admUsuarios" <?= $usu ?> value="U">
				<label for="admUsuarios"></label>
			</div>

			<div class="line">
				<h4> ADM. Conteudo: </h4>
					<input type="checkbox" class="marca" id="admConteudo" name="admConteudo" <?= $cont ?> value="C">
					<label for="admConteudo"></label>
			</div>

			<div class="line">
				<h4> ADM. Produtos: </h4>
					<input type="checkbox" class="marca" id="admProdutos" name="admProdutos" <?= $usu ?> value="P">
					<label for="admProdutos"></label>
			</div>
	
			<div class="line">
				<h4> ADM. Fale Conosco: </h4>
					<input type="checkbox" class="marca" id="admFaleComNois" name="admFaleComNois" <?= $fale  ?> value="F">
					<label for="admFaleComNois"></label>
			</div>

<?php } }?>

		<input type="submit" name="btnEnvNivel" class="btnEnv" value="Cadastrar">
	</form>
</body>
</html>
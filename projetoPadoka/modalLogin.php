<?php
require_once('FaleConosco/BD/banco.php');
$conex = conexaoMysql('padoka'); 
    
$action = '';
    if(isset($_POST['cms'])){
        $nome = $_POST['usuario'];
        $senha = $_POST['senha'];

        $senhaComp = md5($senha);
        
        $sql = "SELECT  tbl_user.* , tbl_permicao.* FROM tbl_user, tbl_permicao 
        where nomeUsr = '".$nome."'AND senha = '".$senhaComp."' 
        and tbl_permicao.idPermicao = tbl_user.idPermicao;"; 

        $funcionarios = mysqli_query($conex,$sql);
                        
        if($rsFun = mysqli_fetch_assoc($funcionarios)){
            if($rsFun != []){
                if($_SESSION['atORdt'] == "desativado"){
                    echo "<script>alert('O usuario ".$nome." não tem permição')</script>";
                }else{
                    $action = '../cms/cms.php';    
                
                    session_start();
                    $_SESSION['nomeUsr'] = $rsFun['nomeUsr'];
                    $_SESSION['nomePerm'] = $rsFun['nomePermicao'];

                    $_SESSION['permAdmFun'] = $rsFun['adm_funcionario'];
                    $_SESSION['permAdmCon'] = $rsFun['adm_conteudo'];
                    $_SESSION['permAdmfale'] = $rsFun['adm_faleConosco'];
                    $_SESSION['permAdmProd'] = $rsFun['adm_produtos'];

                    echo "<script> location.href = 'cms/cms.php' </script>";           
            
                }
            }
        }else{
        	echo"<h1 class='err'>USUARIO OU SENHA INCORRETA</h1>";
        }
        
        
    }
?>


<style type="text/css">
	:root{
		--primary-color:purple;
		--bg-color:#130f0d;
		--text-color:#f0f0f0;
		--ligth-color:rgba(255,255,255,0.04);
	}
	*{
		margin:0;
		padding: 0;
		box-sizing: border-box;
	}
	html{
		font-family:"Robato", sans-serif;
		height: 100%;
	}
	body{
		height: 100vh;
		display: flex;
		flex-direction: column;
		background-color: var(--bg-color);
		color: var(--text-color);
	}
	form{
		background: var(--ligth-color);
		width: 100%;
		max-width: 700px;
		margin:32px auto;
		padding: 32px 64px;
		display: flex;
		flex-direction: column;
	}
	form h2{
		margin-bottom: 32px;
	}
	div.input{
		margin-bottom: 24px;
		position: relative;
	}
	input, button{
		-moz-appearance:none;
		-webkit-appearance:none;
		appearance:none;
		width: 100%;
		padding: 16px 0;
		border: none;
		border-bottom: 1px solid var(--primary-color);
		background-color:transparent;
		outline: none;
		color: var(--text-color);
		font-size: 1em;
	}
	button{
		margin-top: 16px;
		background-color: var(--primary-color);
	}
	input ~ label{
		position: absolute;
		top: 16px;
		left: 0;
		color: var(--ligth-color);
		transition: .4s;
	}
	input:focus ~ label, input:valid ~ label{
		transform: translateY(-24px);
		font-size: 0.8em;
		letter-spacing: 0.1em;
	}
	.input span.erro{
		display: flex;
		padding: 0;
		background-color: var(--ligth-color)
	}
	.input span.erro.active{
		border:1px solid red;
		padding: 0.4em;
	}
	.err{
		width: 100%;
		height: 60px;
		background-color: red;
		color: white;
		border:solid 2px white;
		text-align: center;
		padding: 10px;
	}
</style>
<body>
<form action="<?=$action?>" method="post">
	<h2>Entrar no CMS</h2>
	<div class="input">
		<input required name="usuario" type="text">
		<label>Nome</label>
		<span class="erro"></span>
	</div>

	<div class="input">
		<input required type="password" name="senha">
		<label>Senha</label>
		<span class="erro"></span>
	</div>
	<button type="submir" name="cms">Entrar</button>
</form>
</body>
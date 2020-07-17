<?php
	require_once('../FaleConosco/BD/banco.php');
	$conex = conexaoMysql('padoka'); 
	
	$idPermicao = 0;

     $action = 'insertFuncionario.php?modo=inserir';
     if (isset($_GET['modo']) && 
        $_GET['modo']=='consultaEditar' && 
        isset($_GET['id']))
        {
            $id = $_GET['id'];

            $sql = "select tbl_user.* , 
                    tbl_permicao.nomePermicao, tbl_permicao.idPermicao
                    from tbl_user, tbl_permicao
                    where tbl_permicao.idPermicao = tbl_user.idPermicao
                    and tbl_user.idUsr =".$id;
            
            $comandoSelecionaDado = mysqli_query($conex,$sql);

            if ($rsListContatos = mysqli_fetch_assoc($comandoSelecionaDado)){
                $nome = $rsListContatos['nomeUsr'];
            	$email = $rsListContatos['email'];
            	$telefone = $rsListContatos['telefone'];
            	$cpf = $rsListContatos['CPF'];
            	$senha = $rsListContatos['senha'];

            	$idPermicao = $rsListContatos['idPermicao'];
            	$nomePermicao = $rsListContatos['nomePermicao'];

                $action = "cmsUpdateFuncionario.php?modo=atualizar&id=".$rsListContatos['idUsr'];
            }
        }     
	
?>

<div id="conteinerModal5">
	<div id="modal5"></div>
</div>

<div id="conteinerModal2">
	<div id="modal2"></div>
</div>

<div id="conteinerModal3">
	<div id="modal3"></div>
</div>



<?= require_once('cmsHeader.php')?>
<script src="jQuery.js"></script>
    <script type="text/javascript">
        
           $(document).ready(function(){
               $('.novoNivel').click(function(){
                    $('#conteinerModal2').fadeIn(700);
               });
               $('.gerenciaNivel').click(function(){
               		$('#conteinerModal3').fadeIn(700);
               });
               $('.vizualizar').click(function(){
               		$('#conteinerModal5').fadeIn(700);
               });
          });

     	function gerenciaNivel(){
     		$.ajax({
     			type:"POST",
     			url: "cmsGerenciaNivel.php",
     			data:{modo:'gerenciarNivel'},
     			success: function(dados){
     				$('#modal3').html(dados);
     			}
     		});
     	}

     	function vizualizarFuncionario(idFuncionario){
     		$.ajax({
     			type:"POST",
     			url:"cmsVizualizaFuncionario.php",
     			data:{modo:'vizualizar', id:idFuncionario},
     			success: function(dados){
     				$('#modal5').html(dados);
     			}
     		});
     	}

        function novoNivel(){ 
               $.ajax({
                    type:"POST",
                    url: "cmsNewNivel.php",
                    data:{modo:'NewNivel'},
                    success:function(dados){
                         $('#modal2').html(dados);
                    }
               });
        }

    </script>
<h1>Cadastro de funcionario</h1>
<form action="<?=$action?>" method="post">
	<div class="tudo">
	<div>
	<h2 class="title">Nome:</h2>
		<input type="text" class="inpSlide" value="<?=@$nome?>" name="nomeFuncinario">
	<h2 class="title">Email:</h2>
		<input type="E-mail" class="inpSlide" value="<?=@$email?>" name="emailFuncinario">
	<h2 class="title">Telefone:</h2>
		<input type="text" class="inpSlide" value="<?=@$telefone?>" name="telefoneFuncinario">
	<h2 class="title">CPF:</h2>
		<input type="text" class="inpSlide" value="<?=@$cpf?>" name="cpfFuncinario">
	<h2 class="title">Senha:</h2>
		<input type="text" class="inpSlide" value="<?=@$senha?>" name="senhaFuncinario">
	<h2 class="title">Nivel:</h2>
		<select name="slcNivel" id="slcNivel">
			 <?php
	                        if(isset($_GET['modo']) && $_GET['modo'] == 'consultaEditar'){
	         ?>
	                            <option selected value="<?=$idPermicao?>"><?=$nomePermicao?></option>
	        <?php
	                        }else{
	        ?>
                            	<option selected value=""> Selecione o nivel de acordo com o cargo do funcionario </option>
                        
            <?php
                       	 	}    
                            
                            $sql = "select * from tbl_permicao where idPermicao <> ".$idPermicao ;

                            $selecionaPermicoes = mysqli_query($conex,$sql);

                            while( $rsPermicoes = mysqli_fetch_assoc($selecionaPermicoes)){
            ?>
                        		<option value="<?=$rsPermicoes['idPermicao']?>"><?=$rsPermicoes['nomePermicao']?></option>
           	<?php 
           					} 
           ?>
			
		</select>
		<input type="button"  onclick="novoNivel();" name="btnNovoNivel" value="Novo nivel" class="novoNivel btnNivel">
		<input type="button" onclick="gerenciaNivel();" name="btnGerenciaNivel" value="Gerenciar niveis" class="GerenciaNivel btnNivel">
		
	</div>

	
	
</div>
<input type="submit" name="btnEnviaFuncionario" value="Cadastrar" class="btnEnv  bottom">
	
</form>

<table>
	<tr>
		<td class="titulofun"colspan="6">
			Atuais funcionarios
		</td>			
	</tr>

	<tr>
		<td>
			Nomes:
		</td>
		<td>
			E-mail:
		</td>
		<td>
			Telefone:
		</td>
		<td>
			CPF:
		</td>
		<td>
			Permição
		</td>
		<td>
			Opções:
		</td>
	</tr>
<?php
	$sqli = " select tbl_user.*, tbl_permicao.idPermicao, tbl_permicao.nomePermicao from tbl_user, tbl_permicao 
		where tbl_permicao.idPermicao = tbl_user.idPermicao ";
	$funcionarios = mysqli_query($conex,$sqli);
	while($rsFuncionarios = mysqli_fetch_assoc($funcionarios)){
?>
	<tr>
		<td>
			<?= $rsFuncionarios['nomeUsr']?>			
		</td>
		<td>
			<?= $rsFuncionarios['email']?>
		</td>
		<td>
			<?= $rsFuncionarios['telefone']?>
		</td>
		<td>
			<?= $rsFuncionarios['CPF']?>
		</td>
		<td>
			<?= $rsFuncionarios['nomePermicao']?>
		</td>
		<td>
			<div class="options">
          	<a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
              href="./deleteFuncionario.php?modo=excluir&id=<?=$rsFuncionarios['idUsr']?>"></a>

            <a class="vizualizar fas fa-search-plus" onclick="vizualizarFuncionario(<?=$rsFuncionarios['idUsr']?>)"></a>

            <a class="fas fa-edit" 
             href="cmsAdmFuncionario.php?modo=consultaEditar&id=<?=$rsFuncionarios['idUsr']?>" ></a>
            </div>
		</td>
	</tr>
<?php
}
?>
</table>
	


<?= require_once('cmsFooter.php') ?>
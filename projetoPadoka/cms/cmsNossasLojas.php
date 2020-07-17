<div id="conteinerModal10" class="none">
	<div id="modal10">
	</div>	
</div>


<?php

require_once('cmsHeader.php');

 $action = 'insertLoja.php?modo=inserir';
     if (isset($_GET['modo']) && 
        $_GET['modo']=='consultaEditar' && 
        isset($_GET['id']))
        {
            $id = $_GET['id'];

            $sql = "select * from tbl_nossasLojas where idLojas=".$id;
            
            $comandoSelecionaDado = mysqli_query($conex,$sql);

            if ($rsListContatos = mysqli_fetch_assoc($comandoSelecionaDado)){
                $txt1 = $rsListContatos['txtLoja1'];
                $txt2 = $rsListContatos['txtLoja2'];
                $txt3 = $rsListContatos['txtLoja3'];

                $img1 = $rsListContatos['imgLoja1'];
                $img2 = $rsListContatos['imgLoja2'];
                $img3 = $rsListContatos['imgLoja3'];

                $titulo1 = $rsListContatos['titulo1'];
                $titulo2 = $rsListContatos['titulo2'];
                $titulo3 = $rsListContatos['titulo3'];

                $action = "updateLojas.php?modo=atualizar&id=".$rsListContatos['idLojas'];
            }
        }     



?>

<main>
	<h1>Controle das Nossas Lojas</h1>
		<div class="conteinerGG">
			<form method="post"    style="margin-top: 70px;" class="formulario" action="<?=$action?>" enctype="multipart/form-data">
				<div class="line">
					<h2 class="tt4">Loja 1:</h2>
					<input type="text" name="titulo1" placeholder="NomeLoja" value="<?=@$titulo1?>" class="inpSlide">
					<input type="file" accept="image/jepg, image/png" name="img1">
					<input type="text" name="txt1" class="inpSlide" placeholder="txt1"value="<?=@$txt1?>">	
				</div>
				<div class="line">
					<h2 class="tt4">Loja 2:</h2>
					<input type="text" name="titulo2" placeholder="NomeLoja" value="<?=@$titulo2?>"class="inpSlide">
					<input type="file" name="img2" accept="image/jepg, image/png">
					<input type="text" value="<?=@$txt1?>" name="txt2" placeholder="txt2" class="inpSlide">	
				</div>
				<div class="line">
					<h2 class="tt4">Loja 3:</h2>
					<input type="text" name="titulo3" placeholder="NomeLoja" class="inpSlide" value="<?=@$titulo3?>">
					<input type="file" name="img3" accept="image/jepg, image/png">
					<input type="text" name="txt3" value="<?=@$txt1?>" placeholder="txt3" class="inpSlide">	
				</div>
				
					<input type="submit" class="btnEnv" name="btnEnv"value="Enviar para o site" />	
			</form>	
		</div>
		<table style="margin-top: 100px;">
				<tr class="titulofun" >
					<td colspan="7">
						Conteudos inseridos		
					</td>
				</tr>
				<tr class="linhadatable">
					<td>imagem da loja 1</td>
					<td>imagem da loja 2</td>
					<td>imagem da loja 3</td>
					<td>texot da loja 1</td>
					<td>texto da loja 2</td>
					<td>texto da loja 3</td>
					<td>Opções</td>
				</tr>
				<?php

				$sql="SELECT * FROM tbl_nossasLojas";

				$comando = mysqli_query($conex,$sql);

				while($rsConteudos = mysqli_fetch_assoc($comando)){

				?>
				<tr class="linhadatable">
					<td><figure><?php echo("<img src='filesNossasLojas/".$rsConteudos['imgLoja1']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesNossasLojas/".$rsConteudos['imgLoja2']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesNossasLojas/".$rsConteudos['imgLoja3']."'>");?></figure></td>
					<td><?=$rsConteudos['txtLoja1']?></td>
					<td><?=$rsConteudos['txtLoja2']?></td>
					<td><?=$rsConteudos['txtLoja3']?></td>
					<td><div class="options">
	          	<a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
	              href="deletaLoja.php?modo=excluir&id=<?=$rsConteudos['idLojas']?>"></a>

	            <a class="vizualizar fas fa-search-plus" onclick="preview(<?=$rsConteudos['idLojas']?>)" ></a>

	            <a class="fas fa-edit" 
	             href="cmsNossasLojas.php?modo=consultaEditar&id=<?=$rsConteudos['idLojas']?>" ></a>
            </div></td>
				</tr>


				<?php } ?>
			</table>	
</main>
<script type="text/javascript" src="./jQuery.js"></script>
<script type="text/javascript">
		const contModal = document.querySelector('#conteinerModal10')
		// const vizualizar = document.querySelector('.vizualizar')
		// const fechar = document.getElementById('fechar10')

		// vizualizar.addEventListener('click',( ) =>{
			
		// })



		// fechar.addEventListener('click',()=>{
		// 	contModal.classList.remove('block')
		// })

		function preview(idN){
		$.ajax({
     			type:"POST",
     			url:"modalPreviewLoja.php",
     			data:{modo:'preview', id:idN},
     			success: function(dados){
     				$('#modal10').html(dados);
     			}
     		});
		contModal.classList.add('block')
		}
		
</script>
<?=require_once('cmsFooter.php')?>
<div id="conteinerModal9">
	<div id="modal9"></div>
</div>
<?=require_once('./cmsHeader.php')?>
<script src="jQuery.js"></script>
<script type="text/javascript">
	 $(document).ready(function(){
               $('.vizualizar').click(function(){
                    $('#conteinerModal9').fadeIn(700);
               });
          });
	
	function preview(idVersao){

		$.ajax({
     			type:"POST",
     			url:"previewQuemSomos.php",
     			data:{modo:'vizualizar', id:idVersao},
     			success: function(dados){
     				$('#modal9').html(dados);
     			}
     		});
	}

</script>
<?php


 $action = 'insertQuemSomos.php?modo=inserir';
    if (isset($_GET['modo']) && 
        $_GET['modo']=='consultaEditar' && 
        isset($_GET['id']))
        {
            $id = $_GET['id'];

            $sql = "select * from tblQuemSomos where idVersao = ".$id;
            
            $comandoSelecionaDado = mysqli_query($conex,$sql);

            if ($rsListContatos = mysqli_fetch_assoc($comandoSelecionaDado)){
                $tituloConteudo = $rsListContatos['titulo'];
				$conteudo1 = $rsListContatos['paragrafo1'];
				$conteudo2 = $rsListContatos['paragrafo2'];
				$conteudo3 = $rsListContatos['paragrafo3'];
				$conteudo4 = $rsListContatos['paragrafo4'];
				$localizacao1 = $rsListContatos['loja1'];
				$localizacao2 = $rsListContatos['loja2'];
				$localizacao3 = $rsListContatos['loja3'];

                $action = "updateQuemSomos.php?modo=atualizar&id=".$rsListContatos['idVersao'];
            }
        }     

?>

<main>
		<div class="containerGG">
			
			<h1 class="tt1">Aqui Controla-se o contúdo da Pagina "Quem Somos"</h1>
			<div class="tudo">
			<form method="post" action="<?=$action?>" enctype="multipart/form-data">
				
<h2>Imagens do slider</h2>
			<div class="imgsSlide">
				<input type="file" accept="image/jepg, image/png" name="slider01" required>
				<input type="file" name="slider02" accept="image/jepg, image/png" required>
				<input type="file" name="slider03" accept="image/jepg, image/png" required>
				<input type="file" name="slider04" accept="image/jepg, image/png" required>
				
			</div>
	
			<div id="conteinerImgMoba">
			<h2>Imagem do mobile</h2>
				<input type="file" name="imgMoba" accept="image/jpg, image/png" required>
			</div>
			<div class="conteudos">
				<div class="title">
				<h2>Titulo</h2>
					<input type="text" class="inptitle" name="title" value="<?=@$tituloConteudo?>" required>
			</div>	
			
				<h2>Texto do conteudo</h2>

				<div class="inpsTxt">
						<textarea name="textConteudo1" id="txtArea" cols="30" required value="" rows="25"><?=@$conteudo1?></textarea>
						<textarea name="textConteudo2" value="<?=@$conteudo2?>" id="txtArea" cols="30" required rows="25"><?=@$conteudo2?></textarea>
						<textarea name="textConteudo3" id="txtArea" cols="30" value="<?=@$conteudo3?>" required rows="25"><?=@$conteudo3?></textarea>
						<textarea name="textConteudo4" id="txtArea" cols="30" required rows="25" value="<?=@$conteudo4?>"><?=@$conteudo4?></textarea>
				</div>

			<div id="conteinerImgMoba">
			<h2>Imagem Propaganda</h2>
				<input type="file" name="imgPropaganda" accept="image/jpg, image/png" required >
			</div>


	
			<div class="conteinerLocalizacoes">
				<h2 style="float: left;">Localizações</h2>
				<h2 style="float: left;margin-top: 50px;margin-left: -120px;">Digite o link fornecido pelo google maps</h2>
				<input type="text" class="inptitle" name="localizacao1" required placeholder="ex: https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3657.386970691176!2d-46.92791225042938!3d-23.55454147611792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1591824439456!5m2!1spt-BR!2sbr" value="<?=@$localizacao1?>">
				<input type="text" class="inptitle" name="localizacao2" required value="<?=@$localizacao2?>" placeholder="ex: https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3657.386970691176!2d-46.92791225042938!3d-23.55454147611792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1591824439456!5m2!1spt-BR!2sbr">				
				<input type="text" class="inptitle" name="localizacao3" required value="<?=@$localizacao3?>" placeholder="ex: https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3657.386970691176!2d-46.92791225042938!3d-23.55454147611792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1591824439456!5m2!1spt-BR!2sbr">
				
			</div>
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
					<td>slide1</td>
					<td>slide2</td>
					<td>slide3</td>
					<td>slide4</td>
					<td>Imagem Mobile</td>
					<td>Titulo Conteudo</td>
					<td>Opções</td>
				</tr>
				<?php

				$sql="SELECT * FROM tblQuemSomos";

				$comando = mysqli_query($conex,$sql);

				while($rsConteudos = mysqli_fetch_assoc($comando)){

				?>
				<tr class="linhadatable">
					<td><figure><?php echo("<img src='filesQuemSomos/".$rsConteudos['slide1']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesQuemSomos/".$rsConteudos['slide2']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesQuemSomos/".$rsConteudos['slide3']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesQuemSomos/".$rsConteudos['slide4']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesQuemSomos/".$rsConteudos['imgMoba']."'>");?></figure></td>
					<td><?=$rsConteudos['titulo']?></td>
					<td><div class="options">
          	<a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
              href="deletaQuemSomos.php?modo=excluir&id=<?=$rsConteudos['idVersao']?>"></a>

            <a class="vizualizar fas fa-search-plus" onclick="preview(<?=$rsConteudos['idVersao']?>)"></a>

            <a class="fas fa-edit" 
             href="cmsQuemSomos.php?modo=consultaEditar&id=<?=$rsConteudos['idVersao']?>" ></a>
            </div></td>
				</tr>


				<?php } ?>
			</table>
		</div>
			
	</main>

<?=require_once('./cmsFooter.php')?>
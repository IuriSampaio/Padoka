<?=require_once('./cmsHeader.php')?>
<?php
	if (isset($_POST['btnEnv'])){
		$slide1 = $_POST['slider01'];
		$slide2 = $_POST['slider02'];
		$slide3 = $_POST['slider03'];
		$slide4 = $_POST['slider04'];
		$imgMoba = $_POST['imgMoba'];
		$tituloConteudo = $_POST['title'];
		$conteudo1 = $_POST['textConteudo1'];
		$conteudo2 = $_POST['textConteudo2'];
		$conteudo3 = $_POST['textConteudo3'];
		$conteudo4 = $_POST['textConteudo4'];

		$sql = "insert into tblQuemSomos values(DEFAULT,'".$slide1."','".$slide2."','".$slide3."','".$slide4."','".$imgMoba."','".$tituloConteudo."','".$conteudo1."','".$conteudo2."','".$conteudo3."','".$conteudo4."');";
		if(mysqli_query($conex,$sql)){
			echo"<script>console.log('foi')</script>";
		}else{
			echo"<script>alert('deu M E R D A')</script>";
		}
	}

?>

<main>
		<div class="containerGG">
			
			<h1 class="tt1">Aqui Controla-se o contúdo da Pagina "Quem Somos"</h1>
			<div class="tudo">
			<form method="post" action="cmsQuemSomos.php">
				
<h2>Imagens do slider</h2>
			<div class="imgsSlide">
				<input type="text" class="inpSlide meio" name="slider01">
				<input type="text" class="inpSlide meio" name="slider02">
				<input type="text" class="inpSlide meio" name="slider03">
				<input type="text" class="inpSlide meio" name="slider04">
				
			</div>
	
			<div id="conteinerImgMoba">
			<h2>Imagem do mobile</h2>
				<input type="text" class="inpMoba"name="imgMoba">
			</div>
			<div class="conteudos">
				<div class="title">
				<h2>Titulo</h2>
					<input type="text" class="inptitle" name="title">
			</div>	
			
				<h2>Texto do conteudo</h2>

				<div class="inpsTxt">
						<textarea name="textConteudo1" id="txtArea" cols="30" rows="25">Primeiro paragrafo</textarea>
						<textarea name="textConteudo2" id="txtArea" cols="30" rows="25">Segundo paragrafo</textarea>
						<textarea name="textConteudo3" id="txtArea" cols="30" rows="25">Terceiro paragrafo</textarea>
						<textarea name="textConteudo4" id="txtArea" cols="30" rows="25">Quarto paragrafo</textarea>
				</div>
			</div>
		
			<input type="submit" class="btnEnv" name="btnEnv"value="Enviar para o site" />	
			

			</form>
		</div>
				
		</div>
			
	</main>
<?=require_once('./cmsFooter.php')?>
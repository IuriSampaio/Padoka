<div id="conteinerModal7">
	<div id="modal7"></div>
</div>
<?php
require_once('cmsHeader.php');
require_once('../FaleConosco/BD/banco.php');
$conex = conexaoMysql('padoka'); 


     $action = 'insertCuriosidade.php?modo=inserir';
     if (isset($_GET['modo']) && 
        $_GET['modo']=='consultaEditar' && 
        isset($_GET['id']))
        {
            $id = $_GET['id'];

            $sql = "select * from tbl_curiosidade where idcuriosidades=".$id;
            
            $comandoSelecionaDado = mysqli_query($conex,$sql);

            if ($rsListContatos = mysqli_fetch_assoc($comandoSelecionaDado)){
                $txt1 = $rsListContatos['txtLoja1'];
                $txt2 = $rsListContatos['txtLoja2'];
                $txt3 = $rsListContatos['txtLoja3'];

                $img1 = $rsListContatos['imgLoja1'];
                $img2 = $rsListContatos['imgLoja2'];
                $img3 = $rsListContatos['imgLoja3'];

                $action = "cmsUpdateCuriosidade.php?modo=atualizar&id=".$rsListContatos['idcuriosidades'];
            }
        }     



?>


<script src="jQuery.js"></script>
<script type="text/javascript">
	 $(document).ready(function(){
               $('.vizualizar').click(function(){
                    $('#conteinerModal7').fadeIn(700);
               });
          });
	
	function preview(idcuriosidades){

		$.ajax({
     			type:"POST",
     			url:"previewCuriosidade.php",
     			data:{modo:'vizualizar', id:idcuriosidades},
     			success: function(dados){
     				$('#modal7').html(dados);
     			}
     		});
	}

</script>
<h1>Controle das Curiosidades</h1>
<main id="conteucoCuriosidade">
	
		<div class="conteinerGG contGG">
			<form method="post" class="formulario" action="<?=$action?>" enctype="multipart/form-data">
				<h2 class="tt1">Imagens dos cards Curiosidades</h2>
					<input type="file" name="img1" accept="image/jepg, image/png" >
					<input type="file" name="img2" accept="image/jepg, image/png">
					<input type="file" name="img3" accept="image/jepg, image/png">
				<h2 class="tt1">Textos dos cards Curiosidades</h2>
					<input type="text" name="txt1" value="<?=@$txt1?>" class="inpSlide" placeholder="txt1">
					<input type="text" name="txt2" placeholder="txt2" value="<?=@$txt2?>" class="inpSlide">
					<input type="text" name="txt3" placeholder="txt3" class="inpSlide" value="<?=@$txt3?>">
					<div class="segBt">
						<input type="submit" class="btnEnv" name="btnEnv"value="Enviar para o site" />				
					</div>
			</form>

			<table style="margin-top: 100px;">
				<tr class="titulofun" >
					<td colspan="7">
						Conteudos inseridos		
					</td>
				</tr>
				<tr class="linhadatable">
					<td>imagem1</td>
					<td>imagem2</td>
					<td>imagem3</td>
					<td>texot1</td>
					<td>texto2</td>
					<td>texto3</td>
					<td>Opções</td>
				</tr>
				<?php

				$sql="SELECT * FROM tbl_curiosidade";

				$comando = mysqli_query($conex,$sql);

				while($rsConteudos = mysqli_fetch_assoc($comando)){

				?>
				<tr class="linhadatable">
					<td><figure><?php echo("<img src='filesCuriosidades/".$rsConteudos['imgLoja1']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesCuriosidades/".$rsConteudos['imgLoja2']."'>");?></figure></td>
					<td><figure><?php echo("<img src='filesCuriosidades/".$rsConteudos['imgLoja3']."'>");?></figure></td>
					<td><?=$rsConteudos['txtLoja1']?></td>
					<td><?=$rsConteudos['txtLoja2']?></td>
					<td><?=$rsConteudos['txtLoja3']?></td>
					<td><div class="options">
          	<a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
              href="deletaCuriosidade.php?modo=excluir&id=<?=$rsConteudos['idcuriosidades']?>"></a>

            <a class="vizualizar fas fa-search-plus" onclick="preview(<?=$rsConteudos['idcuriosidades']?>)"></a>

            <a class="fas fa-edit" 
             href="cmsCuriosidades.php?modo=consultaEditar&id=<?=$rsConteudos['idcuriosidades']?>" ></a>
            </div></td>
				</tr>


				<?php } ?>
			</table>	
		</div>
</main>
<?=require_once('cmsFooter.php')?>
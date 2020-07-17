<?php
if (isset($_GET['modo']) && $_GET['modo']=='inserir' && isset($_POST['btnEnv'])){
	$txtLoja1 = $_POST['txt1'];
	$txtLoja2 = $_POST['txt2'];
	$txtLoja3 = $_POST['txt3'];
	require_once('../FaleConosco/BD/banco.php');
            $conex = conexaoMysql('padoka');
	
	if($_FILES['img1']['size'] > 0 && $_FILES['img1']['type'] != ""
	&& $_FILES['img2']['size'] > 0 && $_FILES['img2']['type'] != ""
	&& $_FILES['img3']['size'] > 0 && $_FILES['img3']['type'] != ""){

		$dirArq = 'filesCuriosidades/';

		$imgSize1 = round(($_FILES['img1']['size'])/1024);
		$imgSize2 = round(($_FILES['img2']['size'])/1024);
		$imgSize3 = round(($_FILES['img3']['size'])/1024);

		$arqTpPermitidos = array('image/jpeg','image/jpg','image/png');

		$imgType1 = $_FILES['img1']['type'];
		$imgType2 = $_FILES['img2']['type'];
		$imgType3 = $_FILES['img3']['type'];

		if( in_array($imgType1, $arqTpPermitidos) &&
			in_array($imgType2, $arqTpPermitidos) &&
			in_array($imgType3, $arqTpPermitidos)){

			if($imgSize1 <= 2000 && $imgSize2 <= 2000 && $imgSize3 <= 2000){

				$nomeArq1 = pathinfo( $_FILES['img1']['name'], PATHINFO_FILENAME );
            	$extArq1 = pathinfo( $_FILES['img1']['name'], PATHINFO_EXTENSION );

            	$nomeArq2 = pathinfo( $_FILES['img2']['name'], PATHINFO_FILENAME );
            	$extArq2 = pathinfo( $_FILES['img2']['name'], PATHINFO_EXTENSION );

            	$nomeArq3 = pathinfo( $_FILES['img3']['name'], PATHINFO_FILENAME );
            	$extArq3 = pathinfo( $_FILES['img3']['name'], PATHINFO_EXTENSION );

            	$nomeImg1Cripto = md5($nomeArq1.uniqid(time()));
                $nomeImg2Cripto = md5($nomeArq2.uniqid(time()));
                $nomeImg3Cripto = md5($nomeArq3.uniqid(time()));
			
                $img1 = $nomeImg1Cripto.".".$extArq1;
                $img2 = $nomeImg2Cripto.".".$extArq2;
                $img3 = $nomeImg3Cripto.".".$extArq3;

                $arqTemporario1 = $_FILES['img1']['tmp_name'];
                $arqTemporario2 = $_FILES['img2']['tmp_name'];
                $arqTemporario3 = $_FILES['img3']['tmp_name'];

                if(move_uploaded_file($arqTemporario1, $dirArq.$img1)
            	&& move_uploaded_file($arqTemporario2, $dirArq.$img2)
	            && move_uploaded_file($arqTemporario3, $dirArq.$img3)){

                	$sql = "insert into tbl_curiosidade values (DEFAULT, '".$img1."','".$txtLoja1."','".$img2."','".$txtLoja2."','".$img3."','".$txtLoja3."')";

                	if(mysqli_query($conex,$sql)){
								echo"<script>console.log('foi')
								location.href = 'cmsCuriosidades.php'
								</script>";
							}else{
								echo"<script>alert('deu M E R D A".$sql."')</script>";
							}  
                }
			}
		}
	}
}

<?php


	if (isset($_GET['modo']) && $_GET['modo'] == 'inserir'){
		
		$tituloConteudo = $_POST['title'];
		$conteudo1 = $_POST['textConteudo1'];
		$conteudo2 = $_POST['textConteudo2'];
		$conteudo3 = $_POST['textConteudo3'];
		$conteudo4 = $_POST['textConteudo4'];
		$localizacao1 = $_POST['localizacao1'];
		$localizacao2 = $_POST['localizacao2'];
		$localizacao3 = $_POST['localizacao3'];


		if( $_FILES['slider01']['size'] > 0 && $_FILES['slider02']['size'] > 0 && $_FILES['slider03']['size'] > 0 &&
			$_FILES['slider04']['size'] > 0 && $_FILES['imgMoba']['size'] > 0 && $_FILES['imgPropaganda']['size']>0 &&
			$_FILES['slider01']['type'] != "" && $_FILES['slider02']['type'] != "" && $_FILES['slider03']['type'] != "" 
			&& $_FILES['slider04']['type'] != "" && $_FILES['imgMoba']['type'] != "" && $_FILES['imgPropaganda']['type'] != "" ) {

			$dirArq="filesQuemSomos/";

			$arq1Size=round(($_FILES['slider01']['size'])/1024);
			$arq2Size=round(($_FILES['slider02']['size'])/1024);
			$arq3Size=round(($_FILES['slider03']['size'])/1024);
			$arq4Size=round(($_FILES['slider04']['size'])/1024);
			$sizeImgMoba=round(($_FILES['imgMoba']['size'])/1024);
			$sizeImgProp=round(($_FILES['imgPropaganda']['size'])/1024);
			
			$arqTpPermitidos = array('image/jpeg','image/jpg','image/png');

			$arq1type = $_FILES['slider01']['type'];
			$arq2type = $_FILES['slider02']['type'];
			$arq3type = $_FILES['slider03']['type'];
			$arq4type = $_FILES['slider04']['type'];
			$typeImgMoba = $_FILES['imgMoba']['type'];
			$typeImgPropaganda = $_FILES['imgPropaganda']['type'];

			if(in_array($arq1type, $arqTpPermitidos) || in_array($arq2type, $arqTpPermitidos) || in_array($arq3type, $arqTpPermitidos)
			|| in_array($arq4type, $arqTpPermitidos) || in_array($typeImgMoba, $arqTpPermitidos) || in_array($typeImgPropaganda, $arqTpPermitidos)) {
				if($arq1Size <= 2000 && $arq2Size <= 2000 && $arq3Size <= 2000 && $arq4Size <= 2000 && $sizeImgMoba <= 2000 && $sizeImgProp<=2000){
			
					$nomeArq1 = pathinfo( $_FILES['slider01']['name'] , PATHINFO_FILENAME );
                    $extArq1 = pathinfo( $_FILES['slider01']['name'] , PATHINFO_EXTENSION );

                    $nomeArq2 = pathinfo( $_FILES['slider02']['name'] , PATHINFO_FILENAME );
                    $extArq2 = pathinfo( $_FILES['slider02']['name'] , PATHINFO_EXTENSION );

                    $nomeArq3 = pathinfo( $_FILES['slider03']['name'] , PATHINFO_FILENAME );
                    $extArq3 = pathinfo( $_FILES['slider03']['name'] , PATHINFO_EXTENSION );

                    $nomeArq4 = pathinfo( $_FILES['slider04']['name'] , PATHINFO_FILENAME );
                    $extArq4 = pathinfo( $_FILES['slider04']['name'] , PATHINFO_EXTENSION );

                    $nomeArqMoba = pathinfo( $_FILES['imgMoba']['name'] , PATHINFO_FILENAME );
                    $extArqMoba = pathinfo( $_FILES['imgMoba']['name'] , PATHINFO_EXTENSION );

                    $nomeArqProp= pathinfo( $_FILES['imgPropaganda']['name'] , PATHINFO_FILENAME );
                    $extArqProp= pathinfo( $_FILES['imgPropaganda']['name'] , PATHINFO_EXTENSION );

                    $nomeArq1Cripto = md5($nomeArq1.uniqid(time()));
                    $nomeArq2Cripto = md5($nomeArq2.uniqid(time()));
                    $nomeArq3Cripto = md5($nomeArq3.uniqid(time()));
                    $nomeArq4Cripto = md5($nomeArq4.uniqid(time()));

                    $nomeArqCriptoMoba = md5($nomeArqMoba.uniqid(time()));
                    $nomeArqPropCripto = md5($nomeArqProp.uniqid(time()));

                    $slide1 = $nomeArq1Cripto.".".$extArq1;
                    $slide2 = $nomeArq2Cripto.".".$extArq2;
                    $slide3 = $nomeArq3Cripto.".".$extArq3;
                    $slide4 = $nomeArq4Cripto.".".$extArq4;
                    $imgMoba = $nomeArqCriptoMoba.".".$extArqMoba;
                    $imgPropaganda = $nomeArqPropCripto.".".$extArqProp;

                    $arqTemporario1 = $_FILES['slider01']['tmp_name'];
                    $arqTemporario2 = $_FILES['slider02']['tmp_name'];
                    $arqTemporario3 = $_FILES['slider03']['tmp_name'];
                    $arqTemporario4 = $_FILES['slider04']['tmp_name'];
                    $arqTemporarioMoba = $_FILES['imgMoba']['tmp_name'];
                    $arqTempProp = $_FILES['imgPropaganda']['tmp_name'];

                    if(move_uploaded_file($arqTemporario1, $dirArq.$slide1) && move_uploaded_file($arqTemporario2, $dirArq.$slide2)
                		&& move_uploaded_file($arqTemporario3, $dirArq.$slide3) && move_uploaded_file($arqTemporario4, $dirArq.$slide4)
                		&& move_uploaded_file($arqTemporarioMoba, $dirArq.$imgMoba) && move_uploaded_file($arqTempProp, $dirArq.$imgPropaganda)){
                        	// echo("<script> alert(o arqquivo".$nomeArq1.",".$nomeArq2.",".$nomeArq3.",".$nomeArq4.",".$nomeArqMoba." foi movido para ".$dirArq.")</script>");

                        	$sql = "insert into tblQuemSomos values(DEFAULT,'".$slide1."','".$slide2."','".$slide3."','".$slide4."','".$imgMoba."','".$tituloConteudo."','".$conteudo1."','".$conteudo2."','".$conteudo3."','".$conteudo4."','".$imgPropaganda."','"
                        		.$localizacao1."','".$localizacao2."','".$localizacao3."');";
                        	


							if(mysqli_query($conex,$sql)){
								echo"<script>console.log('foi')</script>";
							}else{
								echo"<script>alert('deu M E R D A ".$sql."')</script>";
							}                   
                    }
				}
			}
		}
	}
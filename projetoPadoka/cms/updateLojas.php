<?php
if (isset($_GET['modo']) && $_GET['modo'] == 'atualizar'){
    require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka'); 
              
        $id = $_GET['id'];
            
                $txt1 = $_POST['txt1'];
                $txt2 = $_POST['txt2'];
                $txt3 = $_POST['txt3'];

                $titulo1 = $_POST['titulo1'];
                $titulo2 = $_POST['titulo2'];
                $titulo3 = $_POST['titulo3'];

                if($_FILES['img1']['size'] > 0 && $_FILES['img1']['type'] != ""
                && $_FILES['img2']['size'] > 0 && $_FILES['img2']['type'] != ""
                && $_FILES['img3']['size'] > 0 && $_FILES['img3']['type'] != ""){

                    $dirArq = 'filesNossasLojas/';

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

                                $sqli = "update tbl_nossasLojas set
                                imgLoja1 ='".$img1."',
                                txtLoja1 ='".$txt1."',
                                imgLoja2 ='".$img2."',
                                txtLoja2 ='".$txt2."',
                                imgLoja3 = '".$img3."',
                                txtLoja3 = '".$txt3."',
                                titulo1 = '".$titulo1."',
                                titulo2 = '".$titulo2."',
                                titulo3 = '".$titulo3."'
                                where idLojas = ".$id;
                    if(mysqli_query($conex,$sqli))
                        echo("
                        <script> 
                        console.log('inserido com suscesso');
                        location.href = 'cmsNossasLojas.php'
                        </script>
                        ");
                    else
                        echo("
                        <script> 
                        alert('erro".$sqli."') 
                        window.history.back();
                        location.href = './cmsNossasLojas.php'
                        </script>
                        ");
                }
                }
            }
        }
    }

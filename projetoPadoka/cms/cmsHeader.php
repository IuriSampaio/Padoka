<?php
    require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka');
    $sql = "select function_Saudacao() as msg;";

    $select = mysqli_query($conex,$sql);

    $rs= mysqli_fetch_assoc($select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padoka - CMS</title>
    <link rel="stylesheet" href="./cms.css">
</head>
<body>
    <header>
        <h1>CMS</h1>
        <h2 class="sauda"><?php echo ($rs['msg']." eae ".$_SESSION['nomeUsr'])?>, você tem permição de <?=$_SESSION['nomePerm']?></h2>
        <div> <figure id="imgCms"></figure> </div>
    </header>
    <ul>
        <li> <a href="../Home/index.php"> Voltar pra Home</a></li>
        <?php
        $admFuncionario =$_SESSION['permAdmFun'];
        $conteudo =$_SESSION['permAdmCon'];    
        $fale = $_SESSION['permAdmfale'];
        $admProdutos =$_SESSION['permAdmProd'];    
            if($admFuncionario =='1'){
                echo "
                    <li> <a href='./cmsAdmFuncionario.php'> ADM. Funcionario </a> </li>
                    ";

            }
            if($conteudo=='1'){
                echo "
                    <li> <a href='./cmsQuemSomos.php'> Quem Somos </a> </li>
                    <li> <a href='./cmsNossasLojas.php'> Nossas Lojas </a> </li>
                    <li> <a href='./cmsCuriosidades.php'> Curiosidades </a> </li>
                    ";
            }
            if($fale =='1'){
                echo "
                    <li> <a href='./cmsFaleConosco.php'> Fale Conosco </a> </li>
                    ";
            }
            if($admProdutos =='1') {
                echo "
                    <li> <a href='./cms.php'>Produtos</a> </li>
                    <li> <a href='./cms.php'> Produto do mês</a> </li>
                    <li> <a href='./cms.php'> Promoções </a> </li>
                ";
            }  
        ?>
    </ul>
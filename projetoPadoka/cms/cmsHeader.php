<?php
    require_once('../FaleConosco/BD/banco.php');
    $conex = conexaoMysql('padoka');

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
        <div> <figure id="imgCms"></figure> </div>
    </header>
    <ul>
    <form action="cms.php" method="post">
        <li> <a href="../Home/index.php"> Voltar pra Home</a></li>
        <li> <a href="./cms.php">Produtos</a> </li>
        <li> <a href="./cms.php"> Produto do mês</a> </li>
        <li> <a href="./cms.php"> Promoções </a> </li>
        <li> <a href="./cmsCuriosidades.php"> Curiosidades </a> </li>
        <li> <a href="./cmsFaleConosco.php"> Fale Conosco </a> </li>
        <li> <a href="./cmsQuemSomos.php"> Quem Somos </a> </li>
        <li> <a href="./cmsNossasLojas.php"> Nossas Lojas </a> </li>
    </form>
    </ul>
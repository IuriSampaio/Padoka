<?php
    require_once('./FaleConosco/BD/banco.php');
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
        <li> <a href="./Home/index.php"> Voltar pra Home</a></li>
        <li>Produtos</li>
        <li>Produto do mês</li>
        <li>Promoções</li>
        <li>Curiosidades</li>
        <li>Fale Conosco</li>
        <li>Quem Somos</li>
        <li>Nossas Lojas</li>
    </ul>
    <main>
    <select name="filtrar" id="filtrar">
        <option value="#">  Filtrar por tipo de comentario  </option>
        <option value="S">Sugestões</option>
        <option value="C">Criticas</option>
        <option value="T">Pedido de emprego</option>
    </select>
    <select name="filtrar2" id="filtrar2">
        <?php
                        if(isset($_GET['modo']) && $_GET['modo'] == 'consultaEditar'){
                            ?>
                            <option value="<?=$idEstado?>"><?=$nomeEstado?></option>
                            <?php
                        }else{
                            ?>
                            <option value="">filtrar por estado</option>
                        
                       <?php
                        }    
                                        $sql = "select * from estados orderbyname" ;
                                        $selecionaEstados = mysqli_query($conex,$sql) ;
                                while( $rsEstados = mysqli_fetch_assoc($selecionaEstados)){
                            ?>
                        <option value="<?=$rsEstados['idEstado']?>"><?=$rsEstados['nome']?></option>
                            <?php } ?>
    </select>
    <div class="consulta">
            <table>
                <tr class="titulo" >
                   <td colspan="7">Todos os usuarios</td>    
                </tr>
                <tr class = "titulos">
                    <td>Nome</td>
                    <td>Celular</td>
                    <td>Estado</td>
                    <td>Email</td>
                    <td>Profisão</td>
                    <td>Critica</td>
                    <td>Opções</td>
                </tr>
                <?php
                    $sql = "  SELECT tbl_criticas.idCritica, tbl_criticas.nome, tbl_criticas.celular,
                     tbl_criticas.email, tbl_criticas.tipoCritica, tbl_criticas.profisao,
                    estados.sigla, estados.nome as nomeEstado 
                    from tbl_criticas, estados
                    where tbl_criticas.idEstado = estados.idEstado
                    order by idCritica desc";

                    $dadosCliente = mysqli_query($conex,$sql);

                    while( $rsContatos = mysqli_fetch_assoc($dadosCliente) ){
                ?> 
                <tr>
                    <td><?= $rsContatos['nome'] ?></td>
                    <td><?= $rsContatos['celular'] ?></td>
                    <td><?= $rsContatos['nomeEstado'] ?></td>
                    <td><?= $rsContatos['email'] ?></td>
                    <td><?= $rsContatos['profisao']?></td>
                    <?php 
                    if ($rsContatos['tipoCritica'] == 'T'){
                        $rsContatos['tipoCritica'] = 'pedido de emprego';
                    }else{
                    ($rsContatos['tipoCritica'] == 'S')? $rsContatos['tipoCritica'] = 'sugestão' : $rsContatos['tipoCritica'] = 'critica';} ?>
                    
                    <td><?= $rsContatos['tipoCritica']?></td>
                    <td>
                    <div class="options">
                            <a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
                             href="./delete.php?modo=excluir&id=<?=$rsContatos['idCritica']?>"></a>
                            <a class="fas fa-search-plus"></a>
                        </div>
                    </td>
                </tr>
                    <?php } ?>
          
            </table>
        </div>
    </main>
    <footer>
       <span> &copy; Desenvolvido por Iuri Sampaio || Professor Marcel || 4.20 SENAI 2020  </span> 
    </footer> 
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   
</body>
</html>
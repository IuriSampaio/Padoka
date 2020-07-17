
<main>
    <div id="conteinerModal" >
        <div id="modal"></div>
    </div>
    <?=require_once('./cmsHeader.php')?>
     <script src="jQuery.js"></script>
        <script type="text/javascript">
              $(document).ready(function(){
                    $('.pesquisar').click(function(){
                        $('#conteinerModal').fadeIn(1000);
                    });
                });

                 
                      function vizualizarctt(idCtt){ 
                           $.ajax({
                                // chamada via post
                                type:"POST",
                                // para está pagina
                                url: "cmsDetalhes.php",
                                // modo vizualizar e id passado pelo argumento da função
                                data:{modo:'vizualizar',id:idCtt},
                                success:function(dados){
                                     $('#modal').html(dados);
                                }
                           });
                      }
       
                   

        </script>

    <form action="cmsFaleConosco.php" method="post">
        <select name="filtroCommment" id="filtrar">
            <option value="#">  Filtrar por tipo de comentario  </option>
            <option value="S">Sugestões</option>
            <option value="C">Criticas</option>
            <option value="T">Pedido de emprego</option>
        </select>
        <button type="submit" name="filtrar" id="btnFiltrar"> Filtrar pelo Desejado </button>
        <button type="submit" name="mostrar" id="btnTodos"> Mostrar Todos os usuarios cadastrados </button>    
    </form>
    
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
                
                    if (isset($_POST['filtrar'])){
                            $tipodeCriticaBuscada = $_POST['filtroCommment'];
                            $sql = "  SELECT tbl_criticas.idCritica, tbl_criticas.nome, tbl_criticas.celular,
                                tbl_criticas.email, tbl_criticas.tipoCritica, tbl_criticas.profisao,
                                estados.sigla, estados.nome as nomeEstado 
                                from tbl_criticas, estados
                                where tbl_criticas.idEstado = estados.idEstado 
                                and tbl_criticas.tipoCritica = '".$tipodeCriticaBuscada."'
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
                    ($rsContatos['tipoCritica'] == 'S')? $rsContatos['tipoCritica'] = 'sugestão' : $rsContatos['tipoCritica'] = 'critica';} 
                    ?>
                    
                    <td><?= $rsContatos['tipoCritica']?></td>
                    <td>
                    <div class="options">
                            <a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
                             href="./delete.php?modo=excluir&id=<?=$rsContatos['idCritica']?>"></a>
                            <a class="pesquisar fas fa-search-plus"  onclick="vizualizarctt(<?=$rsContatos['idCritica']?>);"> </a>
                        </div>
                    </td>
                </tr>
                    <?php }}?>
                    <?php
                        if (isset($_POST['mostrar'])){
                            $tipodeCriticaBuscada = $_POST['filtroCommment'];
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
                    ($rsContatos['tipoCritica'] == 'S')? $rsContatos['tipoCritica'] = 'sugestão' : $rsContatos['tipoCritica'] = 'critica';} 
                    ?>
                    
                    <td><?= $rsContatos['tipoCritica']?></td>
                    <td>
                    <div class="options">
                            <a class="fas fa-user-times" onclick="return confirm('Deseja realmente excluir o registro?');"
                             href="./delete.php?modo=excluir&id=<?=$rsContatos['idCritica']?>"></a>
                            <a class="pesquisar fas fa-search-plus" onclick="vizualizarctt(<?=$rsContatos['idCritica']?>);"></a>
                        </div>
                    </td>
                </tr>
                    <?php }}?>
            </table>
        </div>
    </main>
<?=require_once('./cmsFooter.php')?>
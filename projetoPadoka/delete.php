<?php
echo("teste");
    if(isset($_GET['modo'])){
        if($_GET['modo'] == 'excluir'){
            //pegando os dados de conexão com o banco
            require_once('./FaleConosco/BD/banco.php');
            $conectado = conexaoMysql('padoka');
            // se ouver alguma valor no id:
            if (isset($_GET['id'])){
                //guardando o id do contato que foi clicado 
                $id = $_GET['id'];
                //vai deletar o contato qu tem o id correspondente ao que foi clicado
                $sql = "delete from tbl_criticas where idCritica =". $id;
                // mysqli_query($conectado,$sql1);
                
                // echo("<script>console.log($sql1)</script>");
                //se rodar o query anterior no banco, ele...
                if(mysqli_query($conectado,$sql)){
                    //...redireciona para a pagina principal
                    header('location:./cms.php');
                }
            }
        }
    }
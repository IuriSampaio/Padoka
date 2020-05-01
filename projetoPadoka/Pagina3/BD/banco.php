<?php
    
    function conexaoMysql($banco){
        $server= 'localhost';
        $user='root';
        $senha='';

        $conexao = mysqli_connect($server,$user,$senha,$banco);//CONECTA COM O BANCO
        return $conexao;
    }

?>
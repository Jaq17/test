<?php
    function conectarBanco(){
        $conexao = mysqli_connect('localhost', 'jaq_damasceno', '20071963mae', 'jaq_banco');
        if ($conexao) {
             return $conexao;
        }else{
            return mysqli_connect_error($conexao);
        }
    }
    
   /* function pegarProduto(){
        $conexao = conectarBanco();
        $select = "SELECT * produto";
        $resultado = mysqli_query($conexao, $select);
        if (mysqli_num_rows($resultado) > 0) {
            return $resultado;
         } else {
            return false;
        }
    }*/
?>
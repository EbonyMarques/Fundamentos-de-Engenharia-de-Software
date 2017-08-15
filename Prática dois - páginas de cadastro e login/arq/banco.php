<?php
    function Conecta() {
        //$conexao = mysqli_connect("localhost", "root", "", "dados");
        $conexao = mysqli_connect("mysql.hostinger.com.br", "u172114687_admin", "00Lavaauto", "u172114687_dados");
        return $conexao;
    }

    function Desconecta($conexao) {
        mysqli_close($conexao);
    }
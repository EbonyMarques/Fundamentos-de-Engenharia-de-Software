<?php
    require "banco.php";

    function buscaPraia($praia) {
        $conexao = Conecta();
        $sql = "SELECT * FROM praias WHERE nome = '$praia'";
        $resultado = mysqli_query($conexao, $sql);
        $campos = mysqli_fetch_array($resultado);
        Desconecta($conexao);

        return $campos;
    }

    function retornaInformacao($idpraia) {
        $conexao = Conecta();
        $sql = "SELECT * FROM acontecimentos WHERE praia = '$idpraia'";
        $resultado = mysqli_query($conexao, $sql);

        return $resultado;
    }
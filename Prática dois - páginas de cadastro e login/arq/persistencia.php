<?php
    require "banco.php";

    function retornaPraiaDAO($praia) {
        $conexao = Conecta();
        $sql = "SELECT * FROM praias WHERE nome = '$praia'";
        $resultado = mysqli_query($conexao, $sql);
        $campos = mysqli_fetch_array($resultado);
        Desconecta($conexao);

        return $campos;
    }

    function retornaInformacaoDAO($idpraia) {
        $conexao = Conecta();
        $sql = "SELECT * FROM acontecimentos WHERE praia = '$idpraia'";
        $resultado = mysqli_query($conexao, $sql);
        Desconecta($conexao);

        return $resultado;
    }

    function retornaUsuarioDAO($email) {
        $conexao = Conecta();
        $sql = "SELECT * FROM usuarios WHERE email='$email'";
        $resultado = @mysqli_query($conexao, $sql);
        Desconecta($conexao);

        if (@mysqli_num_rows($resultado) > 0) {
            return true;
        } else {
            return false;
        }
    }

    function inserirUsuarioDAO($nome, $email, $senha) {
        $conexao = Conecta();
        $sql = "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
        mysqli_query($conexao, $sql);
        Desconecta($conexao);
    }

    function entrarDAO($email, $senha) {
        $conexao = Conecta();
        $sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
        $resultado = @mysqli_query($conexao, $sql);
        Desconecta($conexao);

        if (@mysqli_num_rows($resultado) > 0) {
            return true;
        } else {
            return false;
        }
    }
<?php
    require "persistencia.php";

    function retornarPraia($praia) {
        $campo = retornaPraiaDAO($praia);
        $id = $campo["id"];
        $nome = $campo["nome"];

        if ($id != null and $nome != null) {
            return array($id, $nome);
        } else {
            return null;
        }
    }

    function retornarAcontecimentos($idpraia) {
        $resultado = retornaInformacaoDAO($idpraia);

        echo "<br>";

        while ($row = mysqli_fetch_row($resultado)) {
            printf("<h3>%s</h3>", $row[2]);
        }

    }

    function verificarExistencia($email) {
        $verifica = retornaUsuarioDAO($email);

        if ($verifica == 1) {
            return true;
        } else {
            return false;
        }
    }

    function verificarEmail($email){
        $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
        if (preg_match($er, $email)){
            return true;
        } else {
            return false;
        }
    }

    function entrar($email, $senha) {
        $senha = base64_encode($senha);
        $resultado = entrarDAO($email, $senha);

        return $resultado;
    }

    function inserirUsuario($nome, $email, $senha) {
        $verifica = retornaUsuarioDAO($email);

        if ($verifica == false) {
            $senha = base64_encode($senha);
            inserirUsuarioDAO($nome, $email, $senha);
            return true;

        } else {
            return false;
        }
    }

    function verificaLogin() {
        session_start();
        $email = @$_SESSION["email"];

        if (isset($email)) {
            return true;
        } else {
            return false;
        }
    }
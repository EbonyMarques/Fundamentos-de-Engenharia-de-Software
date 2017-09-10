<?php
    header('Content-Type: text/html; charset=utf-8');

    require "persistencia.php";

    function retornarPraia($praia) {
        $campo = retornarPraiaDAO($praia);
        $id = $campo["id"];
        $nome = $campo["nome"];
        $cidade = $campo["cidade"];
        $estado = $campo["estado"];
        $pais = $campo["pais"];
        $latitude = $campo["latitude"];
        $longitude = $campo["longitude"];

        if ($id != null) {
            return array($id, $nome, $cidade, $estado, $pais, $latitude, $longitude);
        } else {
            return null;
        }
    }

    function retornarNomeUsuario($email) {
        $campo = retornarUsuarioDadosDAO($email);
        $nome = $campo["nome"];

        return $nome;

    }

    function retornaInformacoes($idpraia, $latitude, $longitude) {
        return retornarInformacoesDAO($idpraia, $latitude, $longitude);
    }

    function retornarAcontecimentos($idpraia) {
        return retornarAcontecimentosDAO($idpraia);

    }

    function verificarExistencia($email) {
        $verifica = retornarUsuarioDAO($email);

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
        $verifica = retornarUsuarioDAO($email);

        if ($verifica == false) {
            $senha = base64_encode($senha);
            inserirUsuarioDAO($nome, $email, $senha);
            return true;

        } else {
            return false;
        }
    }

    function alterarUsuario($nome, $email) {
        alterarUsuarioDAO($nome, $email);
        return true;
    }

    function inserirInformacao($idpraia, $titulo, $info) {
        inserirInformacaoDAO($idpraia, $titulo, $info);
        return true;
    }

    function verificaLogin() {
        @session_start();
        $email = @$_SESSION["email"];

        if (isset($email)) {
            return true;
        } else {
            return false;
        }
    }

    function verificaVisita() {
        @session_start();
        $praia = @$_SESSION["praia"];

        if (isset($praia)) {
            return true;
        } else {
            return false;
        }
    }
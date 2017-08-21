<?php
    header('Content-Type: text/html; charset=utf-8');
    require "banco.php";

    function retornaPraiaDAO($praia) {
        $conexao = Conecta();
        $sql = "SELECT * FROM praias WHERE nome = '$praia'";
        $resultado = mysqli_query($conexao, $sql);
        $campos = mysqli_fetch_array($resultado);
        Desconecta($conexao);

        return $campos;
    }

    function retornaAcontecimentosDAO($idpraia) {
        $conexao = Conecta();
        $sql = "SELECT * FROM acontecimentos WHERE praia = '$idpraia'";
        $resultado = mysqli_query($conexao, $sql);
        Desconecta($conexao);

        return $resultado;
    }

    function retornaInformacoesDAO($idpraia, $latitude, $longitude) {
        $climaConteudo = curl("http://api.openweathermap.org/data/2.5/weather?id=".$idpraia."&APPID=8045fcb7d8cd01bc3ae907e0defaefef&units=metric");
        $climaInformacoes = json_decode($climaConteudo, true);
        $climaAtual = $climaInformacoes["weather"][0]["description"];
        $temperaturaAtual = $climaInformacoes["main"]["temp"];

        $uvConteudo = curl("http://api.openweathermap.org/data/2.5/uvi?appid=8045fcb7d8cd01bc3ae907e0defaefef&lat=".$latitude."&lon=".$longitude);
        $uvInformacoes = json_decode($uvConteudo, true);
        $uvAtual = $uvInformacoes["value"];

        return array($climaAtual, $uvAtual, $temperaturaAtual);
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

    function inserirInformacaoDAO($idpraia, $titulo, $info) {
        $conexao = Conecta();
        $sql = "INSERT INTO acontecimentos(praia, titulo, acontecimento) VALUES ('$idpraia', '$titulo', '$info')";
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

    function curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
        $data = curl_exec($ch);
        curl_close($ch);

        return $data;
    }
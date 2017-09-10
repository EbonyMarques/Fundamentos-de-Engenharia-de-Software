<!DOCTYPE html>

<html>
<head>
    <title>Aguarde...</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">PROTECHTED</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
            </ul>
        </div>
    </div>
</nav>

<div class="container-second text-center">
    <br><br>
    <h1>Processing...</h1>
</div>

<div class="text-center">
    <?php
        require "negocio.php";
        session_start();

        if ($_POST["acao"] == "criarconta") {
            $nome = $_POST["t_nomeCriar"];
            $email = $_POST["t_emailCriar"];
            $senha = $_POST["t_senhaCriar"];

            if (verificarEmail($email)) {
                $resultado = inserirUsuario($nome, $email, $senha);

                if ($resultado == true) {
                    echo "<h3>Account created successfully.</h3>";
                    echo "<p>Redirecting to login screen...</p>";
                    echo "</h3><meta http-equiv='refresh' content='2; url=entrar.php'>";

                } else {
                    echo "<h3>There is already a registered user associated with this email address. Please check it and try again.</h3>";
                    echo "<p>Redirecting to signup screen...</p>";
                    echo "</h3><meta http-equiv='refresh' content='2; url=criarconta.php'>";

                }

            } else {
                echo "<h3>The registration process could not be completed. Please check your email and try again.</h3>";
                echo "<p>Redirecting to signup screen...</p>";
                echo "</h3><meta http-equiv='refresh' content='2; url=criarconta.php'>";

            }
        } elseif ($_POST["acao"] == "entrar") {
            $email = $_POST["t_emailEntrar"];
            $senha = $_POST["t_senhaEntrar"];

            if (verificarExistencia($email)) {
                $resultado = entrar($email, $senha);

                if ($resultado) {
                    @session_start();

                    $nome = retornarNomeUsuario($email);

                    @$_SESSION['nome'] = $nome;
                    @$_SESSION['email'] = $email;

                    echo "<h3>Authenticated successfully.</h3>";
                    echo "<p>Redirecting...</p>";
                    echo "</h3><meta http-equiv='refresh' content='1; url=decisao.php'>";

                } else {
                    echo "<h3>Incorrect data. Check them and try again.</h3>";
                    echo "<p>Redirecting to login screen...</p>";
                    echo "<meta http-equiv='refresh' content='4; url=entrar.php'>";
                }

            } else {
                echo "<h3>Non-existent user.</h3>";
                echo "<p>Redirecting to login screen...</p>";
                echo "<meta http-equiv='refresh' content='4; url=entrar.php'>";
            }
        } elseif ($_POST["acao"] == "visitando") {
            $praia = $_POST["t_praia"];
            $_SESSION["praia"] = $praia;

            echo "</h3><meta http-equiv='refresh' content='1; url=exibicao.php'>";

        } elseif ($_POST["acao"] == "naovisitando") {
            $_SESSION["praia"] = "";
            echo "<meta http-equiv='refresh' content='1; url=painel.php'>";

        } elseif ($_POST["acao"] == "inserir") {
            $praia = $_POST["praia"];
            $titulo = $_POST["t_titulo"];
            $info = $_POST["t_info"];

            inserirInformacao($praia, $titulo, $info);

            echo "<h3>Info insert sucessfully.</h3>";
            echo "<meta http-equiv='refresh' content='2; url=../principal.php'>";
        } elseif ($_POST["acao"] == "alterar") {
            $nome = $_POST["t_nome"];
            $email = $_SESSION["email"];

            alterarUsuario($nome, $email);
            $_SESSION["nome"] = $nome;

            echo "<h3>Successfully changed data.</h3>";
            echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
        }
    ?>
</div>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN BY EBONY MARQUES RODRIGUES
</footer>
</body>
</html>
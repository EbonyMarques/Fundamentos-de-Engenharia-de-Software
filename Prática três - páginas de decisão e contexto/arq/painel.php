<!DOCTYPE html>

<html>
<head>
    <title>Protechted - início</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">PROTECHTED FUN</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="sair.php">SIGN OUT</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-ag bg-1 text-center">
    <?php
        require "negocio.php";

        if (verificaLogin()) {
            $email = @$_SESSION["email"];
            echo "<h1>Welcome, ".$email.".</h1>";
        } else {
            echo "<h1>Session expired. Redirecting to login screen...</h1>";
            echo "<meta http-equiv='refresh' content='1; url=../principal.php'>";
        }
    ?>
</div>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN BY EBONY MARQUES RODRIGUES
</footer>
</body>
</html>
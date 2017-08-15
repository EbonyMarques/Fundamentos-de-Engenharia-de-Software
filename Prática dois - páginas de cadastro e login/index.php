<!DOCTYPE html>

<html>
<head>
    <title>Protechted</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="">PROTECHTED FUN</a>
        </div>

    </div>
</nav>

<div class="container-ag text-center">
    <h1>Wait a second...</h1>

    <?php
        require "arq/negocio.php";

        if (verificaLogin()) {
            echo "<meta http-equiv='refresh' content='1; url=arq/painel.php'>";
        } else {
            echo "<meta http-equiv='refresh' content='1; url=principal.php'>";
        }
    ?>
</div>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN BY EBONY MARQUES RODRIGUES
</footer>
</body>
</html>
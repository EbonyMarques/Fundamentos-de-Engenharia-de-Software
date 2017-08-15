<!DOCTYPE html>

<html>
<head>
    <title>Contexto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <?php
                session_start();

                if (@$_SESSION["logado"] == 1) {
                    echo '<a class="navbar-brand" href="consulta.php">PROTECHTED FUN</a>';
                } else {
                    echo '<a class="navbar-brand" href="../index.php">PROTECHTED FUN</a>';
                }
            ?>

        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">SIGN IN</a></li>
                <li><a href="">SIGN UP</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-principal text-center">
    <?php
        require "negocio.php";

        $praia = $_POST["t_praia"];
        $praia = retornarPraia($praia);

        if ($praia != null) {
            echo "<h1>$praia[1]</h1>";

        } else {
            echo "<h1>Nonexistent beach.</h1>";
        }
    ?>
</div>

<div class="text-center">
    <?php
        retornarAcontecimentos($praia[0]);
    ?>
</div>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN BY EBONY MARQUES RODRIGUES
</footer>
</body>
</html>
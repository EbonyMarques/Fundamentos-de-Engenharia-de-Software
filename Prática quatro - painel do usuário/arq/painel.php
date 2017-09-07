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

<div class="container-painel text-center">
    <?php
        require "negocio.php";

        if (verificaLogin()) {
            $nome = @$_SESSION["nome"];
            $email = @$_SESSION["email"];
            $praia = @$_SESSION["praia"];
            echo "<h1>Welcome, " . $nome . ".</h1>";
            if (empty($praia)) {
                echo "<h3>You aren't currently visiting any beach.</h3>";
            } else {
                echo "<h3>You are currently in ".$praia.".</h3>";
            }

        }
    ?>
</div>

<div class="text-center">
    <?php
        echo '<hr class="featurette-divider">';
        echo "<br><h3>Do you need to update something?</h3>";
        if (verificaLogin()) {
            echo "<br>";
            echo "<form class=\"form-horizontal\" method=\"POST\" action=\"alterar.php\">";
            echo "<fieldset>";
            echo "<div class=\"form-group\">";
            echo "<label class=\"col-md-4 control-label\" for=\"bot_alterar\"></label>";
            echo "<div class=\"col-md-4\">";
            echo "<br>";
            echo "<button id=\"bot_alterar\" name=\"botaoalterar\" class=\"btn btn-primary\">UPDATE PERSONAL DATA</button></div></div></fieldset></form></div>";
        }
    ?>
</div>

<div class="text-center">
    <?php
        if (verificaLogin()) {
            $email = @$_SESSION["email"];
            $praia = @$_SESSION["praia"];

            echo "<form class=\"form-horizontal\" method=\"POST\" action=\"decisao.php\">";
            echo "<fieldset>";
            echo "<div class=\"form-group\">";
            echo "<label class=\"col-md-4 control-label\" for=\"bot_alterar\"></label>";
            echo "<div class=\"col-md-4\">";
            echo "<br>";
            echo "<button id=\"bot_alterar\" name=\"botaoalterar\" class=\"btn btn-primary\">UPDATE BEACH DATA</button></div></div></fieldset></form></div>";
            echo "<br><br>";
            echo "<br><br>";

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
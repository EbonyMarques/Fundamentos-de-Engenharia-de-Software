<!DOCTYPE html>

<html>
<head>
    <title>Protechted</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="../index.php">PROTECHTED</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <?php
                @session_start();

                if (isset($_SESSION["email"])) {
                    echo '<li><a href="painel.php">PANEL</a></li>';
                    echo '<li><a href="sair.php">SIGN OUT</a></li>';
                } else {
                    echo '<li><a href="entrar.php">SIGN IN</a></li>';
                    echo '<li><a href="criarconta.php">SIGN UP</a></li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>

<div class="container-principal text-center">
    <h1>Update personal data</h1>
</div>

<div class="text-center">
    <?php
        require "negocio.php";

        if (verificaLogin()) {
            $email = @$_SESSION["email"];

            echo "<form class=\"form-horizontal\" method=\"POST\" action=\"processos.php\">";
            echo "<fieldset>";
            echo '<div class="form-group">';
            echo '<label class="col-md-4 control-label"></label>';
            echo '<div class="col-md-4">';
            echo '<input align="center" id="t_nome" name="t_nome" type="text" placeholder="complete name" class="form-control input-md" required>';
            echo '</div>';
            echo '</div>';
            echo "<div class=\"form-group\">";
            echo "<label class=\"col-md-4 control-label\" for=\"bot_alterar\"></label>";
            echo "<div class=\"col-md-4\">";
            echo '<input type="hidden" name="praia" value='.$email.'>';
            echo '<input type="hidden" name="acao" value="alterar">';
            echo "<br>";
            echo "<button id=\"bot_alterar\" name=\"botaoalterar\" class=\"btn btn-primary\">CHANGE IT</button></div></div></fieldset></form></div>";
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
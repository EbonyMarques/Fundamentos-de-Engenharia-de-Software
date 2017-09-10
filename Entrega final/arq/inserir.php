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
            <a class="navbar-brand" href="">PROTECHTED</a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="arq/entrar.php">SIGN IN</a></li>
                <li><a href="arq/criarconta.php">SIGN UP</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-principal text-center">
    <h1>Insert info</h1>
</div>

<div class="text-center">
    <form class="form-horizontal" method="POST" action="processos.php">
        <fieldset>
            <input type="hidden" name="praia" value=<?php echo $_POST['praia']; ?>>
            <input type="hidden" name="acao" value="inserir">

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_titulo" name="t_titulo" type="text" placeholder="title" class="form-control input-md" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_info" name="t_info" type="text" placeholder="info" class="form-control input-md" required>
                </div>
            </div><br>

            <div class="form-group">
                <label class="col-md-4 control-label" for="bot_login"></label>
                <div class="col-md-4">
                    <button id="bot_inserir" name="botaoinserir" class="btn btn-primary">INSERT</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN BY EBONY MARQUES RODRIGUES
</footer>
</body>
</html>
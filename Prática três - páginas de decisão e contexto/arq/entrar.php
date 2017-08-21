<!DOCTYPE html>

<html>
<head>
    <title>Protechted | Sign in</title>
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
                <li><a href="criarconta.php">SIGN UP</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-principal text-center">
    <h1>Log in</h1>
</div>

<div class="text-center">
    <form class="form-horizontal" method="POST" action="processos.php">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_emailEntrar" name="t_emailEntrar" type="text" placeholder="email address" class="form-control input-md" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_senhaEntrar" name="t_senhaEntrar" type="password" placeholder="password" class="form-control input-md" required>
                </div>
            </div>

            <input type="hidden" name="acao" value="entrar"><br>

            <div class="form-group">
                <label class="col-md-4 control-label" for="bot_login"></label>
                <div class="col-md-4">
                    <button id="bot_enviar" name="botaoentrar" class="btn btn-primary">LOG IN</button>
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
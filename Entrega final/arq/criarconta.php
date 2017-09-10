<!DOCTYPE html>

<html>
<head>
    <title>Protechted | Create an account now</title>
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
                <li><a href="entrar.php">SIGN IN</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-second text-center">
    <h1>Create an account now</h1>
</div>

<div class="text-center">
    <form class="form-horizontal" method="POST" action="processos.php">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_nomeCriar" name="t_nomeCriar" type="text" placeholder="complete name" class="form-control input-md" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_emailCriar" name="t_emailCriar" type="text" placeholder="email address" class="form-control input-md" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_senhaCriar" name="t_senhaCriar" type="password" placeholder="password" class="form-control input-md" required>
                </div>
            </div>

            <input type="hidden" name="acao" value="criarconta"><br>

            <div class="form-group">
                <label class="col-md-4 control-label" for="bot_login"></label>
                <div class="col-md-4">
                    <button id="bot_enviar" name="botaocriarconta" class="btn btn-primary">CREATE</button>
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
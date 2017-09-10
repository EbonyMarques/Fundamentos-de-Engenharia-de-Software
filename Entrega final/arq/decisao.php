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

    </div>
</nav>

<div class="container-principal text-center">
    <h1>What beach are you on?</h1>
</div>

<div class="text-center">
    <form class="form-horizontal" method="POST" action="processos.php">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_praia" name="t_praia" type="text" placeholder="beach name" class="form-control input-md" required>
                </div>
            </div>

            <input type="hidden" name="acao" value="visitando"><br>

            <div class="form-group">
                <label class="col-md-4 control-label" for="bot_login"></label>
                <div class="col-md-4">

                    <button id="bot_visitando" name="botaovisitando" class="btn btn-primary">CONTINUE</button>
                </div>
            </div>
        </fieldset>
    </form>

    <form class="form-horizontal" method="POST" action="processos.php">
        <fieldset>
            <input type="hidden" name="acao" value="naovisitando">
            <div class="form-group">
                <label class="col-md-4 control-label" for="bot_login"></label>
                <div class="col-md-4">
                    <button id="bot_visitando" name="botaovisitando" class="btn btn-primary">I'M NOT ON A BEACH</button>
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
<!DOCTYPE html>

<html>
<head>
    <title>Protechted - início</title>
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

        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="">ENTRAR</a></li>
                <li><a href="">CRIAR CONTA</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-principal bg-1 text-center">
    <h1>Saiba o que está acontecendo na sua praia</h1>
    <h3>Busque por ela e encontre informações em tempo real</h3>
</div>

<div class="container-secundario bg-1 text-center">
    <form class="form-horizontal" method="POST" action="arq/exibicao.php">
        <fieldset>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4">
                    <input align="center" id="t_praia" name="t_praia" type="text" placeholder="nome da praia" class="form-control input-md" required>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="bot_login"></label>
                <div class="col-md-4">
                    <button id="bot_enviar" name="botaobusca" class="btn btn-t">BUSCAR</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>

<footer class="container-rodape atributos-rodape text-center">
    UFRPE - DEINFO - BSI | FUNDAMENTOS DE ENGENHARIA DE SOFTWARE 2017.1 | PROTECHTED FUN POR EBONY MARQUES RODRIGUES
</footer>
</body>
</html>
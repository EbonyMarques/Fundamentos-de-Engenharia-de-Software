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
                        <li><a href="painel.php">PANEL</a></li>
                        <li><a href="">LOG OUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-principal bg-1 text-center">
            <h1>What is happening on any beach?</h1>
            <h3>Search and find information in real time</h3>

            <?php
                session_start();
                $_SESSION["logado"] = true;
            ?>
        </div>
        
        <div class="container-secundario bg-1 text-center">
            <form class="form-horizontal" method="POST" action="exibicao.php">
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-4 control-label"></label>  
                        <div class="col-md-4">
                            <input align="center" id="t_praia" name="t_praia" type="text" placeholder="beach name" class="form-control input-md" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="col-md-4 control-label" for="bot_login"></label>
                          <div class="col-md-4">
                          <button id="bot_enviar" name="botaobusca" class="btn btn-t">SEARCH</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        
        <footer class="container-rodape atributos-rodape text-center">
            UFRPE - DEINFO - BSI | SOFTWARE ENGINEERING FOUNDATIONS 2017.1 | PROTECHTED FUN by EBONY MARQUES RODRIGUES
        </footer>
    </body>
</html>
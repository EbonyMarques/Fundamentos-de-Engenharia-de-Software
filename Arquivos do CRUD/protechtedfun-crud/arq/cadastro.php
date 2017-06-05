<!DOCTYPE html>

<html>
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>

  <body>
  
    <!Cabeçalho>

    <nav class="navbar navbar-default">
    <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../principal.php">Protechted Fun</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div></div></nav>

    <!Primeiro bloco>

    <div class="container-fluid bg-1 text-center">
    <h3>Cadastro de usuário</h3>
    </div>

    <!Segundo bloco>

    <div class="container-centro bg-5 text-center"><br/>

    <form class="form-horizontal" method="POST" action="processos.php">
    <fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label" for="txt_nome">Nome completo:</label>
      <div class="col-md-4">
      <input id="txt_nome" name="txt_nome" type="text" placeholder="Insira seu nome aqui." class="form-control input-md" required>
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="txt_cidade">Cidade onde reside:</label>  
      <div class="col-md-4">
      <input id="txt_cidade" name="txt_cidade" type="text" placeholder="Insira sua cidade aqui." class="form-control input-md" required>
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="txt_email">Endereço de e-mail:</label>  
      <div class="col-md-4">
      <input id="txt_email" name="txt_email" type="text" placeholder="Insira seu e-mail aqui." class="form-control input-md" required>
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="pass">Crie uma senha:</label>
      <div class="col-md-4">
      <input id="senha" name="senha" type="password" placeholder="Insira sua senha aqui." class="form-control input-md" required>
      </div>
    </div><br/>

    <input type='hidden' name='acao' value='cadastrar'>

    <div class="form-group">
      <label class="col-md-4 control-label" for="bot_enviar"></label>
      <div class="col-md-4">
        <button id="bot_enviar" name="bot_enviar" class="btn btn-t">Cadastrar</button>
      </div>
    </div>

    </fieldset>
    </form>

    </div>

    <!Rodapé>

    <footer class="container-footer bg-4 text-center">
    <p>Universidade Federal Rural de Pernambuco</p> 
    <h5>Bacharelado em Sistemas de Informação</h5>
    <h5>Fundamentos de Engenharia de Software 2017.1</h5>
    <h5><strong>Protechted Fun</strong><em> por Ebony Marques Rodrigues</em></h5>
    </footer>

  </body>
</html>
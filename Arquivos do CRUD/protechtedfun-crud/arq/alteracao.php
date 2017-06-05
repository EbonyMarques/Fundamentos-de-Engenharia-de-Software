<!DOCTYPE html>

<html>
  <head>
    <title>Atualização</title>
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
    <a class="navbar-brand" href="../index.php">Protechted Fun</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div></div></nav>

    <!Primeiro bloco>

    <div class="container-fluid bg-1 text-center">

    <?php
      session_start();
      $verifica = @$_SESSION['email'] or die("Sessão expirada. Redirecionando...<meta http-equiv='refresh' content='1; url=../index.php'>");
    ?>
    
    <h3>Atualização de dados cadastrais</h3>

    </div>

    <!Segundo bloco>

    <div class="container-centro bg-5 text-center"><br/>
    <form class="form-horizontal" method="POST" action="processos.php">
    <fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label" for="txt_nome">Nome completo:</label>
      <div class="col-md-4">
      <input type="hidden" name="acao" value="alterar">
      <input id="txt_nome" name="txt_nome" type="text" value='<?php echo $_POST['txt_nome'];?>' placeholder="Insira o novo nome aqui." class="form-control input-md" required>
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="txt_cidade">Cidade onde reside:</label>  
      <div class="col-md-4">
      <input id="txt_cidade" name="txt_cidade" type="text" value='<?php echo $_POST['txt_cidade'];?>' placeholder="Insira a nova cidade aqui." class="form-control input-md" required>
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="txt_email">Endereço de e-mail:</label>  
      <div class="col-md-4">
      <input id="txt_email" name="txt_email" type="text" value='<?php echo $_POST['txt_email'];?>' placeholder="Insira seu e-mail aqui." class="form-control input-md" required>
        
      </div>
    </div>

    <div class="form-group">
      <input id="id" name="id" type="hidden" value='<?php echo $_POST['id'];?>'>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="bot_enviar"></label>
      <div class="col-md-4">
        <button id="bot_enviar" name="bot_enviar" class="btn btn-t">Alterar</button>
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
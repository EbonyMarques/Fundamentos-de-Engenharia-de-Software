<!DOCTYPE html>

<html>
  <head>
    <title>Início</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
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
    <a class="navbar-brand" href="">Protechted Fun</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    </div></div></nav>

    <!Primeiro bloco>

    <div class="container-fluid bg-1 text-center">
    <h2>Bem-vindo!</h2>
    Estamos felizes em tê-lo aqui.
    </div>

    <!Segundo bloco>

    <div class="container-centro bg-2 text-center">
    <?php
      require "arq/faux.php";
      VerificaLog();
    ?>
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
<!DOCTYPE html>

<html>
  <head>
    <title>Sair</title>
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
      $verifica = $_SESSION['email'] or die("Sessão expirada. Redirecionando...<meta http-equiv='refresh' content='1; url=../index.php'>");
    ?>

    <h2>Sair</h2>
    </div>

    <!Segundo bloco>

    <div class="container-centro bg-2 text-center">
      <?php
        session_destroy();
        echo "Logout efetuado com sucesso.";
        echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
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
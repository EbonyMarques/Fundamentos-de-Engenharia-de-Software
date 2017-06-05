<!DOCTYPE html>

<html>
  <head>
    <title>Principal</title>
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
      $verifica = @$_POST['txt_email'] or die("Sessão expirada. Redirecionando...<meta http-equiv='refresh' content='1; url=../index.php'>");
    ?>
    
    <h2>Entrar</h2>
    </div>

    <!Segundo bloco>

    <div class="container-centro bg-2 text-center">
      <?php
        require 'faux.php';
        $email = $_POST['txt_email'];
        $senha = $_POST['senha'];
        $resultado = VerificaExistencia($email);

        if ($resultado == true) {
          $resultado = VerificaVeracidade($email, $senha);

          if ($resultado == true) {
            session_start();
            @$_SESSION['email'] = $email;
            @$_SESSION['nivel'] = IdentificaUsuario($email, $senha);
            echo "<h3>Autenticado com sucesso.</h3>";
            echo "<p>Aguarde...</p>";
            echo "<meta http-equiv='refresh' content='2; url=painel.php'>";

          } else {
            echo "<h3>Dados incorretos. Verifique-os e tente novamente.</h3>";
            echo "<p>Redirecionando...</p>";
            echo "<meta http-equiv='refresh' content='2; url=../principal.php'>";
          }
          
        } else {
            echo "<h3>Usuário inexistente.</h3>";
            echo "<p>Redirecionando...</p>";
            echo "<meta http-equiv='refresh' content='2; url=../principal.php'>";
        }
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
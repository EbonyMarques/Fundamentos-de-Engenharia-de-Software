<!DOCTYPE html>

<html>
  <head>
    <title>Painel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
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
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php">Sair</a></li>
    </ul></div></div></nav>

    <!Primeiro bloco>

    <div class="container-fluid bg-1 text-center">
    <?php
      require 'faux.php';
      session_start();
      
      try {
        $email = @$_SESSION['email'] or die("Sessão expirada. Redirecionando...<meta http-equiv='refresh' content='1; url=../index.php'>");

        if ($_SESSION['nivel'] == 'admin') {
          echo "<h3>Painel administrativo</h3>";
        } else {
          echo "<h3>Painel do usuário</h3>";
        }

        echo "<p>Olá, ".$email.". O que deseja fazer?</p>";

      } catch (Exception $e) {
        echo "";
      }

    ?>
    </div>

    <!Segundo bloco>

    <div class="container-centro bg-5 text-center">
    <?php

      if ($_SESSION['nivel'] == "admin") {

        $resultado = ListaUsuarios("");

        if (@mysqli_num_rows($resultado) > 1) {
          echo "<h4>Lista de usuários cadastrados</h4><br/>";

          echo "<table align='center'><tr align='center'><td>ID</td><td width='300'>Nome</td><td width='250'>E-mail</td><td width='250'>Cidade</td><td width='200'>Registro</td></tr>";

          while ($tb = mysqli_fetch_array($resultado)) {
            if ($tb['nome'] != 'admin') {
              $id = $tb['id'];
              $nome = $tb['nome'];
              $cidade = $tb['cidade'];
              $email = $tb['email'];
              $registro = $tb['registro'];

              echo "<td width='10' align='center'>".$id."</td>";
              echo "<td width='10' align='center'>".$nome."</td>";
              echo "<td width='10' align='center'>".$email."</td>";
              echo "<td width='10' align='center'>".$cidade."</td>";
              echo "<td width='10' align='center'>".$registro."</td>";
              
              echo "<td><form action='alteracao.php' method='POST'>";
              echo "<input type='hidden' name='acao' value='alterar'/>";
              echo "<input type='hidden' name='id' value='".$id."'/>";
              echo "<input type='hidden' name='txt_nome' value='".$nome."'>";
              echo "<input type='hidden' name='txt_cidade' value='".$cidade."'>";
              echo "<input type='hidden' name='txt_email' value='".$email."'>";
              echo "<input type='submit' class='btn btn-warning' name='alterar' value='Atualizar'/>&nbsp;</form></td>";

              echo "<td><form action='processos.php' method='POST'>";
              echo "<input type='hidden' name='acao' value='excluir'/>";
              echo "<input type='hidden' name='id' value='".$id."'/>";
              echo "<input type='submit' class='btn btn-danger' name='alterar' value='Excluir'/></form></td></tr>";
            }
          }
        } else {
          echo "Não existem usuários cadastrados no momento.";
        }

           echo "</table>";

      } else {
        $parametro = " WHERE email='".$_SESSION['email']."'";
        $resultado = ListaUsuarios($parametro);

        if (@mysqli_num_rows($resultado) > 0) {
          echo "<h4>Seus dados</h4><br/>";

          echo "<table align='center'><tr align='center'><td width='200'>Nome</td><td width='200'>Cidade</td><td width='250'>Registro</td></tr>";

          while ($tb = mysqli_fetch_array($resultado)) {
            if ($tb['nivel'] != 'admin') {
              $id = $tb['id'];
              $nome = $tb['nome'];
              $cidade = $tb['cidade'];
              $email = $tb['email'];
              $registro = $tb['registro'];

              echo "<td width='10' align='center'>".$nome."</td>";
              echo "<td width='10' align='center'>".$cidade."</td>";
              echo "<td width='10' align='center'>".$registro."</td>";
              
              echo "<td><form action='alteracao.php' method='POST'>";
              echo "<input type='hidden' name='acao' value='alterar'/>";
              echo "<input type='hidden' name='id' value='".$id."'/>";
              echo "<input type='hidden' name='txt_nome' value='".$nome."'>";
              echo "<input type='hidden' name='txt_cidade' value='".$cidade."'>";
              echo "<input type='hidden' name='txt_email' value='".$email."'>";
              echo "<input type='submit' class='btn btn-warning' name='alterar' value='Atualizar'/>&nbsp;</form></td>";

              echo "<td><form action='processos.php' method='POST'>";
              echo "<input type='hidden' name='acao' value='excluir'/>";
              echo "<input type='hidden' name='id' value='".$id."'/>";
              echo "<input type='submit' class='btn btn-danger' name='alterar' value='Excluir conta'/></form></td></tr>";

              echo "</table>";
            }
          }
      } else {
        echo "Algo errado aconteceu. Tente fazer login novamente.";
        session_destroy();
      }
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
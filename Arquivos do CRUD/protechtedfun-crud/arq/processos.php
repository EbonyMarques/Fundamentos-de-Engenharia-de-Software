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
      if ($_POST['acao'] == 'cadastrar') {
        echo "<h3>Cadastro de usuário</h3>";
      } elseif ($_POST['acao'] == 'alterar') {
        echo "<h3>Atualização de dados cadastrais</h3>";
      } else {
        echo "<h3>Exclusão de conta</h3>";
      }
    ?>
    
    </div>

    <!Segundo bloco>

    <div class="container-centro bg-5 text-center">
          
      <?php
        require "faux.php";
        session_start();

          if ($_POST['acao'] == 'alterar') {
            
            $id = $_POST['id'];
            $nome = $_POST['txt_nome'];
            $nome = VerificaEntrada($nome);
            $email = $_POST['txt_email'];
            $cidade = $_POST['txt_cidade'];

            if (isMail($email)) {
              $usuario = ListaUsuarios(" WHERE email='$email'");
              $dados = mysqli_fetch_array($usuario);

              if (VerificaExistencia($email) == false or $dados['id'] == $id) {
                $resultado = AlteraUsuario($id, $nome, $email, $cidade);

                if ($resultado == true) {
                  echo "Dados alterados com sucesso.<br/>";
                  echo "Redirecionando...";

                  $resultado = ListaUsuarios(" WHERE id=$id");
                  $tb = mysqli_fetch_array($resultado);
                  
                  if ($_SESSION['nivel'] != 'admin') {
                    $_SESSION['email'] = $tb['email'];
                  }

                  echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
                } else {
                  echo "Erro na alteração...";
                }

              } else {
                echo "Não é possível alterar. O e-mail digitado já está associado à outra conta.<br/>";
                echo "Redirecionando...";
                echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
              }
            } else {
              echo "<h3>Não foi possível concluir o processo de alteração.</h3>";
              echo "Verifique o e-mail informado e tente novamente.";
              echo "</h3><meta http-equiv='refresh' content='2; url=painel.php'>";
            }
            
          } elseif ($_POST['acao'] == 'excluir') {
            $id = $_POST['id'];

            $resultado = ExcluiUsuario($id);

            if ($resultado == true) {
              echo "Usuário removido com sucesso!<br/>";
              echo "Redirecionando...";

              if ($_SESSION['email'] != 'admin') {
                session_destroy();
                
              }
              echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
            } else {
              echo "Erro na exclusão";
            }

          } elseif ($_POST['acao'] == 'cadastrar') {
              $nome = $_POST['txt_nome'];
              $nome = VerificaEntrada($nome);
              $cidade = $_POST['txt_cidade'];
              $email = $_POST['txt_email'];
              $senha = $_POST['senha'];
              $senha = base64_encode($senha);

              if (isMail($email)) {  
                $resultado = CadastraUsuario($nome, $email, $senha, $cidade);

                if ($resultado == true) {
                  echo "<h3>Cadastro efetuado com sucesso.</h3>";
                  echo "Redirecionando para a tela de login...";
                  echo "</h3><meta http-equiv='refresh' content='2; url=../principal.php'>";

                } else {
                  echo "<h3>Já existe um usuário cadastrado associado a esse endereço de e-mail. Verifique-o e tente novamente.</h3>";
                  echo "Redirecionando para tela de cadastro...";
                  echo "</h3><meta http-equiv='refresh' content='2; url=cadastro.php'>";
                }
              } else {
                echo "<h3>Não foi possível concluir o processo de cadastro.</h3>";
                echo "Verifique o e-mail informado e tente novamente.";
                echo "</h3><meta http-equiv='refresh' content='2; url=cadastro.php'>";
              }

          } else {
            echo $_POST['acao']." desconhecida";
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
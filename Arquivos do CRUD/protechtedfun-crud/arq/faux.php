<?php
	function Conecta() {
		$conexao = mysqli_connect("mysql.hostinger.com.br", "u172114687_admin", "00Lavaauto", "u172114687_dados");
		//$conexao = mysqli_connect("localhost", "root", "", "dados");
		return $conexao;
	}

	function Desconecta($conn) {
		mysqli_close($conn) or die(mysqli_error());

	}

	function isMail($email){
	    $er = "/^(([0-9a-zA-Z]+[-._+&])*[0-9a-zA-Z]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}){0,1}$/";
	    if (preg_match($er, $email)){
		return true;
	    } else {
		return false;
	    }
	}

	function VerificaEntrada($entrada) {
		$conn = Conecta();

		$entrada = mysqli_real_escape_string($conn, $entrada);

		return $entrada;
	}

	function VerificaLog() {
		session_start();
	    $email = @$_SESSION['email'];

	    echo "Aguarde...";

	    if (isset($email)) {
	    	echo "<meta http-equiv='refresh' content='1; url=arq/painel.php'>";
	    } else {
	    	session_destroy();
	    	echo "<meta http-equiv='refresh' content='1; url=principal.php'>";
      }
	}

	function VerificaVeracidade($email, $senha) {
		$conn = Conecta();
		$senha = base64_encode($senha);
		$comando = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
		$resultado = @mysqli_query($conn, $comando);
		Desconecta($conn);

		if (@mysqli_num_rows($resultado) > 0) {
			return true;
		} else {
			return false;
		}
	}

	function VerificaExistencia($email) {
		$conn = Conecta();
		$comando = "SELECT * FROM usuarios WHERE email='$email'";
		$resultado = @mysqli_query($conn, $comando);
		
		if (@mysqli_num_rows($resultado) > 0) {
			return true;
		} else {
			return false;
		}

		Desconecta($conn);
	}

	function IdentificaUsuario($email, $senha) {
		$conn = Conecta();
		$senha = base64_encode($senha);
		$comando = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
		$resultado = mysqli_query($conn, $comando);
		$usuario = mysqli_fetch_array($resultado);

		return $usuario['nivel'];

	}

	function ListaUsuarios($parametro) {
        $comando = "SELECT * FROM usuarios".$parametro;
        $conn = Conecta();
        $resultado = mysqli_query($conn, $comando);
        Desconecta($conn);

        return $resultado;
	}

	function CadastraUsuario($nome, $email, $senha, $cidade) {
		$conn = Conecta();
		$resultado = VerificaExistencia($email);

		if ($resultado == false) {
			$comando = "INSERT INTO usuarios(nome, email, senha, cidade) VALUES ('$nome', '$email', '$senha', '$cidade')";
        	$insercao = mysqli_query($conn, $comando) or die("erro de cadastro");

        	return true;
        
		} else {
			return false;
            echo "<meta http-equiv='refresh' content='2; url=cadastro.php'>";
		}

		Desconecta($conn);
	}

	function AlteraUsuario($id, $nome, $email, $cidade) {
		$conn = Conecta();
		$comando = "UPDATE usuarios SET nome='$nome', email='$email', cidade='$cidade' WHERE id='$id'";
		$alteracao = mysqli_query($conn, $comando) or die("erro de alteracao");

		Desconecta($conn);

		return true;

	}

	function ExcluiUsuario($id) {
		$conn = Conecta();
		$comando = "DELETE FROM usuarios WHERE id=$id";
		$alteracao = mysqli_query($conn, $comando) or die("erro de exclusao");

		return true;

	}

?>
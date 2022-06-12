<?php
	include_once 'conexao.php';
	// Cria conexão
	$conn = new mysqli($servername, $username, $password, $database);

	
	// Verifica conexão
	if ($conn->connect_error) {
		die("Conexão Falhou: " . $conn->connect_error);
	}

	$login = $_REQUEST['login'];
	$senha = $_REQUEST['senha'];

	$sql = "SELECT * FROM Usuario WHERE LoginS = '$login' and Senha = '$senha'";

	$result = $conn->query($sql);

	if(mysqli_num_rows($result) > 1)
	{
		unset($_SESSION['LoginS']);
		unset($_SESSION['Senha']);
		header('Location: telaProduto.php');
	}else{
		$_SESSION['LoginS'] = $login;
		$_SESSION['Senha'] = $senha;

		header('Location: menu.html');

		
	}
	$conn->close();
	/* 
		<?php
		
			session_start();
			if((!isset($_SESSION['LoginS']) == true) and (!isset($_SESSION['Senha']) == true))
			{
				unset($_SESSION['LoginS']);
				unset($_SESSION['Senha']);
				header('Location: telaLoginComprador.html');
			}
			$logado = $_SESSION['LoginS'];

		?>
		*/
?>
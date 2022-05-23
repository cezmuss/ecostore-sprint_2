<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <?php require 'conexao.php'?>
    <?php 
    $nomeEmp = $_POST['nome'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cnpj = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $referencia = $_POST['referencia'];

    // Cria conexão
	$conn = mysqli_connect($servername, $username, $password, $database);

	// Verifica conexão
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	// Configura para trabalhar com caracteres acentuados do português
	mysqli_query($conn,"SET NAMES 'utf8'");
	mysqli_query($conn,'SET character_set_connection=utf8');
	mysqli_query($conn,'SET character_set_client=utf8');
	mysqli_query($conn,'SET character_set_results=utf8');

	// Faz Select na Base de Dados
	$sql = "BEGIN;
        INSERT INTO Usuario (Nome, Login, Senha, DataNasc, Email, CPF, Telefone) VALUES ('$nome','$login','$senha','$email', '$cnpj', '$cpf');
            INSERT INTO Telefone (CodUsu, NumTel) VALUES (LAST_INSERT_ID(), '$telefone');
         COMMIT;";

    $mysql_query($query,$conexao);
         echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
         ?> 

    ?>

</body>
</html>
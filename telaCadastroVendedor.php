<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>
    <?php require 'conexao.php' ?>
    <?php
    $nomeEmp = $_REQUEST['nome'];
    $login = $_REQUEST['login'];
    $senha = $_REQUEST['senha'];
    $email = $_REQUEST['email'];
    $cnpj = $_REQUEST['cpf'];
    $telefone = $_REQUEST['telefone'];
    $cep = $_REQUEST['cep'];
    $rua = $_REQUEST['rua'];
    $numero = $_REQUEST['numero'];
    $referencia = $_REQUEST['referencia'];

    // Cria conexão
    $conn = new mysqli($servername, $username, $password, $database);

    // Verifica conexão
    if ($conn->connect_error) {
        die("Conexão Falhou: " . $conn->connect_error);
    }
    // Configura para trabalhar com caracteres acentuados do português
    $conn->query("SET NAMES 'utf8'");
    $conn->query('SET character_set_connection=utf8');
    $conn->query('SET character_set_client=utf8');
    $conn->query('SET character_set_results=utf8');

    // Faz Insert na Base de Dados
    $sql = "BEGIN;
        INSERT INTO Usuario ( LoginS, Senha, Email, TipoUsuario) 
            VALUES ('$login','$senha','$email', 'Vendedor');
        INSERT INTO Telefone (CodUsu, NumTel) VALUES (LAST_INSERT_ID(), '$telefone');
        INSERT INTO Endereco (CodUsu, Rua, CEP, Numero, Complemento)
            VALUES (LAST_INSERT_ID(), '$rua', '$cep', '$numero', $referencia);
        INSERT INTO Vendedor (CodUsu, NomeEmp, Cnpj) 
            VALUES (LAST_INSERT_ID(), '$nomeEmp', '$cnpj');
        COMMIT;"; 

    if ($conn->multi_query($sql) === true){
        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
    } else {
        echo "Falhou!";
    }


    $conn->close();
    ?>


</body>

</html>
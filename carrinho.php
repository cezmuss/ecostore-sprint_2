<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require 'conexao.php'?>
    <?php    // Cria conexão
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
                INSERT INTO Usuario (Nome, LoginS, Senha, DataNasc, Email, CPF, TipoUsuario) 
                    VALUES ('$nome','$login','$senha','$dataNasc','$email', '$cpf', 'Comprador');
                INSERT INTO Telefone (CodUsu, NumTel) VALUES (LAST_INSERT_ID(), '$telefone');
                COMMIT;"; //TODO ENDEREÇO PARA USUARIO

        $conn->query($sql);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
        $conn->close();
    ?>

</body>
</html>
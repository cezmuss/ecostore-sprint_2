<?php
    require 'conexao.php';
    $nomeProduto = $_REQUEST['nomeProduto'];
    $descricao = $_REQUEST['descricao'];
    $categoria = $_REQUEST['categoria'];
    $imagem = $_REQUEST['imagem'];
    $cep = $_REQUEST['cep'];
    $telefone = $_REQUEST['telefone'];

    // criar conexao
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
            INSERT INTO Produto (NomeProduto, Descricao, Categoria, Foto, Telefone) 
                VALUES ('$nomeProduto','$descricao','$categoria','$imagem', '$cep', '$telefone');
            INSERT INTO Telefone (CodUsu, NumTel) VALUES (LAST_INSERT_ID(), '$telefone');
            COMMIT;"; //TODO ENDEREÇO PARA USUARIO

    $conn->query($sql);

    echo "Seu Produto foi cadastrado com sucesso!<br>Agradecemos a atenção.";
    $conn->close();


?>

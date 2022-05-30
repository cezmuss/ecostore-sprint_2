<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem Usuários</title>
</head>
<body>
    <?php require 'conexao.php' ?>
    <?php // Cria conexão
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

    $sql = "SELECT * FROM usuarios ORDER BY CodUsu DESC"

    ?>
    <div>
        <table class='tabela'>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome<th>
                    <th scope="col">Login</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Data de nascimento</th>
                    <th scope="col">Email</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Telefone</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>".$user_data['CodUsu']."</td>";
                        echo "<td>".$user_data['Nome']."</td>";
                        echo "<td>".$user_data['Login']."</td>";
                        echo "<td>".$user_data['Senha']."</td>";
                        echo "<td>".$user_data['DataNasc']."</td>";
                        echo "<td>".$user_data['Email']."</td>";
                        echo "<td>".$user_data['CPF']."</td>";
                        echo "<td>".$user_data['NumTel']."</td>";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>
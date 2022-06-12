<!DOCTYPE html>
<?php session_start(); ?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTLV.css">
    <title>Login</title>
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Bem-vindo a EcoStore<br>Faça seu login ou<br>Cadastre-se</h1>
            <img src="imagens/logo.png" class="left-login-image" alt="logotipo">
        </div>
        <div class="right-login">
            <div class="card-login">
                <h1>Login</h1>
                <?php
                    if (isset($_POST['login']) && !empty($_POST['senha'])) {
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
                    
                    }
                ?>
                <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" id="login" placeholder="Usuário" required>
                    </div> 
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Senha" required>
                    </div>
                    <button class="btn-login" type="submit" name="submit" id="submit">Entrar</button>
                </form>   
                <p>Não possui login? 
                    <a href="telaCadastroVendedor.php">Cadastre-se</a>.
                    </p>
            </div>    
        </div>
    </div>
</body>
</html>
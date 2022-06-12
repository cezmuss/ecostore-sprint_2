<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTCV.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="box">
        <form method="post">
            <fieldset>
                <legend><b>Cadastro Vendedor</b></legend>
                <br><br>
                <div class="inputBox">
                    <label for="nome" class="labelInput">Nome Empresa</label>
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="login" class="labelInput">Login</label>
                    <input type="text" name="login" id="login" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="senha" class="labelInput">Senha</label>
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="email" class="labelInput">E-mail</label>
                    <input type="email" name="email" id="email" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cpf"
                    class="labelInput">CNPJ</label>
                    <input type="number" name="cpf" id="cpf" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Telefone</label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">CEP</label>
                    <input type="cep" name="cep" id="cep" class="inputUser" required>
                </div> 
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Rua</label>
                    <input type="rua" name="rua" id="rua" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Número</label>
                    <input type="num" name="numero" id="numero" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="telefone" class="labelInput">Referência</label>
                    <input type="ref" name="referencia" id="referencia" class="inputUser" required>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
            <?php require 'execCadastroVendedor.php'; ?>
        </form>
    </div>
</body>
</html>

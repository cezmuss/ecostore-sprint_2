<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/logo.png"/>
    <link rel="stylesheet" href="css/estiloTP.css">
    <title>Cadastrar produto</title>

</head>
<body>
    <div class="box">
        <form action="">
            <fieldset>
                <legend><b>Anunciar produto</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="titulo" class="inputUser" required>
                    <label for="nome" class="labelInput">Título</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="descricao" id="descricao" class="inputUser" required>
                    <label for="descricao" class="labelInput">Descrição</label>
                </div>
                <br>
                <p>Categoria:</p>
                <input type="radio" id="casa" name="casa" value="casa" required>
                <label for="casa">Para casa</label>
                <br>
                <input type="radio" id="masculino" name="higiene" value="higiene" required>
                <label for="higiene">Higiene</label>
                <br>
                <input type="radio" id="acessorios" name="acessorios" value="acessorios" required>
                <label for="acessorios">Acessórios</label>
                <br>
                <input type="radio" id="alimentacao" name="alimentacao" value="alimentacao" required>
                <label for="alimentacao">Alimentação</label>
                <br><br>
                <label for="fotos">Imagens:</label>
                <input type="file" name="fotos" id="fotos" accept=".jpg, .png, .jpeg" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="number" name="CEP" id="CEP" class="inputUser" required>
                    <label for="estado" class="labelInput">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="tel" id="tel" class="inputUser" required>
                    <label for="endereco" class="labelInput">Telefone </label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h2>Login</h2>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form action="public/processa.php" method="POST" id="formLogin">
            <label for="usuario">Usuário:</label>
            <input type="text" name="usuario" id="usuario" required><br><br>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required><br><br>

            <button type="submit">Entrar</button>
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="public/js/script.js"></script>
</body>

</html>
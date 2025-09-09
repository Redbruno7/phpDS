<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Números Primos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h2>Gerador de Números Primos</h2>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form action="public/processa.php" method="POST">
            <label for="limite">Digite um número:</label>
            <input type="number" name="limite" id="limite" required><br><br>
            <button type="submit">Gerar</button>
        </form>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="public/js/script.js"></script>
</body>

</html>
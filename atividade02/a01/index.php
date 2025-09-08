<?php
require_once "public/tabuada.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Gerar Tabuada</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form action="public/processa.php" method="POST">
            <label for="numero">Digite um número:</label>
            <input type="number" name="numero" id="numero" required>
            <button type="submit">Gerar</button>
        </form>

        <?php
        if (isset($_GET["numero"])) {
            $numero = intval($_GET["numero"]);
            gerarTabuada($numero);
        }
        ?>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="public/js/script.js"></script>
</body>

</html>
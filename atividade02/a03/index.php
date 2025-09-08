<?php
require_once "public/contagem.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Contador de Vogais em uma Frase</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form action="public/processa.php" method="POST">
            <label for="frase">Digite uma frase:</label><br>
            <textarea name="frase" id="frase" rows="4" cols="40" required></textarea>
            <button type="submit">Analisar</button>
        </form>

        <?php
        if (isset($_GET["frase"])) {
            $frase = $_GET["frase"];
            contarVogais($frase);
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
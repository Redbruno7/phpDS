<?php
require_once "public/media.php"
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Notas</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Sistema de Notas de Alunos</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form action="public/processa.php" method="POST">
            <label for="nome">Nome do aluno:</label>
            <input type="text" name="nome" id="nome" required><br><br>

            <label>Notas:</label><br>
            <input type="number" name="nota1" step="0.1">
            <input type="number" name="nota2" step="0.1">
            <input type="number" name="nota3" step="0.1">
            <input type="number" name="nota4" step="0.1">

            <button type="submit">Cadastrar</button>
        </form>

        <?php
        // Mostra alunos cadastrados
        session_start();
        if (isset($_SESSION["alunos"])) {
            foreach ($_SESSION["alunos"] as $aluno) {
                avaliarAluno($aluno["nome"], $aluno["notas"]);
            }
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
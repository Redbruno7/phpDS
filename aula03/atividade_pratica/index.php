<?php
session_start();

// Inicializa a lista de alunos
if (!isset($_SESSION["alunos"])) {
    $_SESSION["alunos"] = [];
}

// Adicionar aluno
if (isset($_POST["adicionar"])) {
    $nome = trim($_POST["nome"]);
    $notas = [
        floatval($_POST["nota1"]),
        floatval($_POST["nota2"]),
        floatval($_POST["nota3"]),
        floatval($_POST["nota4"])
    ];

    if ($nome != "") {
        $_SESSION["alunos"][] = [
            "nome" => $nome,
            "notas" => $notas
        ];
    }
}

// Limpar lista de alunos
if (isset($_POST["limpar"])) {
    $_SESSION["alunos"] = [];
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno (com Session)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #5a789e;
        }

        .container {
            background: #fff;
            margin: 20px auto;
            padding: 20px;
            width: 80%;
            border-radius: 5px;
        }

        input {
            margin: 3px 0;
            display: block;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <article class="container">
        <h2>Cadastro de Aluno (com Session)</h2>
        <form method="post">
            <label>Nome do Aluno:</label>
            <input type="text" name="nome" required>

            <label>Nota 1:</label>
            <input type="number" name="nota1" step="0.01" required>

            <label>Nota 2:</label>
            <input type="number" name="nota2" step="0.01" required>

            <label>Nota 3:</label>
            <input type="number" name="nota3" step="0.01" required>

            <label>Nota 4:</label>
            <input type="number" name="nota4" step="0.01" required>

            <button type="submit" name="adicionar">Adicionar Aluno</button>
            <button type="submit" name="limpar" formnovalidate>Limpar Lista de Alunos</button>
        </form>

        <hr>
        <h2>Lista de Alunos Cadastrados</h2>
        <?php
        if (!empty($_SESSION["alunos"])) {
            foreach ($_SESSION["alunos"] as $aluno) {
                echo "<h3>" . htmlspecialchars($aluno["nome"]) . "</h3>";

                $soma = array_sum($aluno["notas"]);
                $media = $soma / count ($aluno["notas"]);

                echo "<ul>";

                foreach ($aluno["notas"] as $i => $nota) {
                    echo "<li>Nota " . ($i+1) . ": " . $nota . "</li>";
                }

                echo "<li><strong>Soma:</strong> $soma</li>";
                echo "<li><strong>Média:</strong> " . number_format($media, 2, ",", ".") . "</li>";
                echo "</ul>";
            }
        } else {
            echo "<p>Nenhum aluno cadastrado</p>";
        }
        ?>
    </article>
</body>

</html>
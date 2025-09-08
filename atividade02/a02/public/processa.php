<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $notas = [
        floatval($_POST["nota1"]),
        floatval($_POST["nota2"]),
        floatval($_POST["nota3"]),
        floatval($_POST["nota4"])
    ];

    // Inicializa a lista de alunos se não existir
    if (!isset($_SESSION["alunos"])) {
        $_SESSION["alunos"] = [];
    }

    // Adiciona o aluno no array da sessão
    $_SESSION["alunos"][] = [
        "nome" => $nome,
        "notas" => $notas
    ];

    // Redireciona de volta ao index.php
    header("Location: ../index.php");
    exit();
}
?>
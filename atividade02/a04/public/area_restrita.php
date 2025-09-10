<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área Restrita</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <h1>Bem-vindo à área restrita!</h1>
    </header>

    <main>
        <p>Você está logado.</p>
        <a href="logout.php">Sair</a>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
<?php
session_start();

// Se ainda não existe um número sorteado, cria
if (!isset($_SESSION['numero'])) {
    $_SESSION['numero'] = rand(1, 100);
    $_SESSION['tentativas'] = 0;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Jogo de Adivinhação</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <h2>Adivinhe o número (1 a 100)</h2>

    <form action="public/processa.php" method="POST">
        <label for="palpite">Digite seu palpite:</label>
        <input type="number" name="palpite" id="palpite" min="1" max="100" required>
        <br><br>
        <button type="submit">Tentar</button>
    </form>
</body>
</html>
<?php
session_start();

function verificarPalpite($palpite, $numero) {
    if ($palpite == $numero) {
        return "correto";
    } elseif ($palpite < $numero) {
        return "menor";
    } else {
        return "maior";
    }
}

$palpite = $_POST['palpite'] ?? null;
$mensagem = "";

if ($palpite) {
    $_SESSION['tentativas']++;

    $resultado = verificarPalpite($palpite, $_SESSION['numero']);

    if ($resultado == "correto") {
        $mensagem = "<h3>Parabéns! Você acertou!</h3>";
        $mensagem .= "<p>O número era <strong>{$_SESSION['numero']}</strong>.</p>";
        $mensagem .= "<p>Tentativas: <strong>{$_SESSION['tentativas']}</strong></p>";

        // reseta o jogo
        session_unset();
        session_destroy();
    } elseif ($resultado == "menor") {
        $mensagem = "Seu palpite é MENOR que o número.";
    } else {
        $mensagem = "Seu palpite é MAIOR que o número.";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h2>Resultado da Jogada</h2>
    <p><?= $mensagem ?></p>

    <form action="../index.php" method="POST">
        <button type="submit">Tentar novamente</button>
    </form>
</body>
</html>

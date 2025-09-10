<?php
function calcularCedulas($valor) {
    $cedulas = [100, 50, 20, 10, 5];
    $resultado = [];

    foreach ($cedulas as $c) {
        if ($valor >= $c) {
            $resultado[$c] = intdiv($valor, $c);
            $valor = $valor % $c;
        }
    }
    return $resultado;
}

$valor = $_POST['valor'] ?? 0;

if ($valor < 5 || $valor % 5 != 0) {
    $mensagem = "Valor inválido! O saque deve ser múltiplo de 5.";
} else {
    $cedulas = calcularCedulas($valor);
    $mensagem = "<h3>Saque de R$ $valor realizado:</h3><ul>";
    foreach ($cedulas as $nota => $qtd) {
        if ($qtd > 0) {
            $mensagem .= "<li>$qtd cédula(s) de R$ $nota</li>";
        }
    }
    $mensagem .= "</ul>";
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
    <h2>Resultado do Saque</h2>
    <p><?= $mensagem ?></p>

    <form action="../index.php" method="POST">
        <button type="submit">Fazer novo saque</button>
    </form>
    <form action="../index.php" method="POST">
        <button type="submit">Encerrar</button>
    </form>
</body>
</html>

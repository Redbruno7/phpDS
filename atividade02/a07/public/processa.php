<?php
// Funções de conversão
function celsiusToFahrenheit($c) {
    return ($c * 9/5) + 32;
}

function celsiusToKelvin($c) {
    return $c + 273.15;
}

function fahrenheitToCelsius($f) {
    return ($f - 32) * 5/9;
}

function fahrenheitToKelvin($f) {
    return ($f - 32) * 5/9 + 273.15;
}

function kelvinToCelsius($k) {
    return $k - 273.15;
}

function kelvinToFahrenheit($k) {
    return ($k - 273.15) * 9/5 + 32;
}

// Pega dados do formulário
$tipo = $_POST['tipo'] ?? '';
$valor = $_POST['valor'] ?? 0;
$resultado = "";

switch ($tipo) {
    case "cToF":
        $resultado = "$valor °C = " . number_format(celsiusToFahrenheit($valor), 2, ',', '.') . " °F";
        break;
    case "cToK":
        $resultado = "$valor °C = " . number_format(celsiusToKelvin($valor), 2, ',', '.') . " K";
        break;
    case "fToC":
        $resultado = "$valor °F = " . number_format(fahrenheitToCelsius($valor), 2, ',', '.') . " °C";
        break;
    case "fToK":
        $resultado = "$valor °F = " . number_format(fahrenheitToKelvin($valor), 2, ',', '.') . " K";
        break;
    case "kToC":
        $resultado = "$valor K = " . number_format(kelvinToCelsius($valor), 2, ',', '.') . " °C";
        break;
    case "kToF":
        $resultado = "$valor K = " . number_format(kelvinToFahrenheit($valor), 2, ',', '.') . " °F";
        break;
    default:
        $resultado = "Conversão inválida!";
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
    <h2>Resultado da Conversão</h2>
    <p><?= $resultado ?></p>

    <form action="../index.php" method="POST">
        <button type="submit">Fazer nova conversão</button>
    </form>
    <form action="../index.php" method="POST">
        <button type="submit">Sair</button>
    </form>
</body>
</html>

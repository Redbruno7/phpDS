<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperaturas</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <h2>Conversor de Temperaturas</h2>

    <form action="public/processa.php" method="POST">
        <label for="tipo">Escolha a conversão:</label><br><br>
        <select name="tipo" id="tipo" required>
            <option value="cToF">Celsius -> Fahrenheit</option>
            <option value="cToK">Celsius -> Kelvin</option>
            <option value="fToC">Fahrenheit -> Celsius</option>
            <option value="fToK">Fahrenheit -> Kelvin</option>
            <option value="kToC">Kelvin -> Celsius</option>
            <option value="kToF">Kelvin -> Fahrenheit</option>
        </select>
        <br><br>

        <label for="valor">Digite o valor:</label>
        <input type="number" step="0.01" name="valor" id="valor" required>
        <br><br>

        <button type="submit">Converter</button>
    </form>
</body>
</html>
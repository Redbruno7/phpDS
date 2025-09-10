<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <h2>Simulador de Caixa Eletrônico</h2>

    <form action="public/processa.php" method="POST">
        <label for="valor">Digite o valor do saque:</label>
        <input type="number" name="valor" id="valor" min="5" step="5" required>
        <br><br>
        <button type="submit">Sacar</button>
    </form>
</body>
</html>

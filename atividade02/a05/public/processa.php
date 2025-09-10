<?php
function ehPrimo($num) {
    if ($num < 2) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

$limite = $_POST['limite'] ?? 0;
$primos = [];

for ($i = 1; $i <= $limite; $i++) {
    if (ehPrimo($i)) {
        $primos[] = $i;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <h2>Números primos até <?= $limite ?>:</h2>
    </header>

    <main>
        <p><?= implode(", ", $primos) ?></p>

        <form action="../index.php" method="POST">
            <button type="submit">Gerar novamente</button>
        </form>

        <form action="../index.php" method="POST">
            <button type="submit">Sair</button>
        </form>
</body>

</html>
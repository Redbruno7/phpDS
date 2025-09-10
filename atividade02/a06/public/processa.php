<?php
session_start();

// Inicializa array de produtos na sessão
if (!isset($_SESSION['produtos'])) {
    $_SESSION['produtos'] = [];
}

function adicionarProduto($nome, $preco) {
    $_SESSION['produtos'][] = ["nome" => $nome, "preco" => $preco];
}

function listarProdutos() {
    if (empty($_SESSION['produtos'])) {
        return "<p>Nenhum produto cadastrado.</p>";
    }

    $html = "<ul>";
    foreach ($_SESSION['produtos'] as $p) {
        $html .= "<li>" . $p['nome'] . " - R$ " . number_format($p['preco'], 2, ',', '.') . "</li>";
    }
    $html .= "</ul>";
    return $html;
}

function pesquisarProduto($nome) {
    $resultado = [];
    foreach ($_SESSION['produtos'] as $p) {
        if (stripos($p['nome'], $nome) !== false) {
            $resultado[] = $p;
        }
    }
    return $resultado;
}

$acao = $_POST['acao'] ?? '';

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Processando</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h2>Resultado</h2>

    <?php
    switch ($acao) {
        case "adicionar":
            ?>
            <form method="POST" action="processa.php">
                <input type="hidden" name="acao" value="salvar">
                <label>Nome do Produto:</label>
                <input type="text" name="nome" required><br><br>
                <label>Preço:</label>
                <input type="number" name="preco" step="0.01" required><br><br>
                <button type="submit">Salvar</button>
            </form>
            <?php
            break;

        case "salvar":
            $nome = $_POST['nome'] ?? '';
            $preco = $_POST['preco'] ?? 0;
            adicionarProduto($nome, $preco);
            echo "<p>Produto <strong>$nome</strong> adicionado com sucesso!</p>";
            break;

        case "listar":
            echo listarProdutos();
            break;

        case "pesquisar":
            ?>
            <form method="POST" action="processa.php">
                <input type="hidden" name="acao" value="resultadoPesquisa">
                <label>Digite o nome do produto:</label>
                <input type="text" name="termo" required>
                <button type="submit">Pesquisar</button>
            </form>
            <?php
            break;

        case "resultadoPesquisa":
            $termo = $_POST['termo'] ?? '';
            $resultados = pesquisarProduto($termo);
            if (empty($resultados)) {
                echo "<p>Nenhum produto encontrado para: <strong>$termo</strong></p>";
            } else {
                echo "<p>Resultados para <strong>$termo</strong>:</p><ul>";
                foreach ($resultados as $p) {
                    echo "<li>" . $p['nome'] . " - R$ " . number_format($p['preco'], 2, ',', '.') . "</li>";
                }
                echo "</ul>";
            }
            break;

        case "sair":
            session_unset();
            session_destroy();
            echo "<p>Sessão encerrada. Produtos apagados.</p>";
            break;

        default:
            echo "<p>Ação inválida!</p>";
    }
    ?>

    <br>
    <a href="../index.php">Voltar ao Menu</a>
</body>
</html>

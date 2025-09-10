<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produtos</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h2>Sistema de Produtos</h2>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <form action="public/processa.php" method="POST">
            <label>Escolha uma opção:</label><br><br>
            <button type="submit" name="acao" value="adicionar">Adicionar Produto</button>
            <button type="submit" name="acao" value="listar">Listar Produtos</button>
            <button type="submit" name="acao" value="pesquisar">Pesquisar Produto</button>
            <button type="submit" name="acao" value="sair">Sair</button>
        </form>
    </main>
</body>

</html>
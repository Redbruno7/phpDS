<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Extraindo valores com extract()</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <?php
            echo "<hr>";

            echo "<h2> 1 - Extract </h2>";

            // Criação de um array associativo com chave => valor
            $array = [
                "nome" => "Maria",
                "idade" => 40,
                "peso" => 50.5
            ];

            // Exibe o array completo em um formato legível
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            // A função extract() transforma as chaves do array em variáveis
            // Exemplo: cria as variáveis $nome, $idade e $peso
            extract($array);

            echo "<hr>";

            // Exibe o valor da variável $nome (que foi criada a partir do array)
            print_r("Valor extraído: " . $nome);

            echo "<hr>";
        ?>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>
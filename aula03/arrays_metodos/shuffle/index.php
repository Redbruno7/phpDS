<!DOCTYPE html>
<html lang="pt-br">

<head>
<!--
    A função shuffle() só funciona corretamente com arrays indexados (numéricos).
    Quando você usa sheffle() em um array associativo, o PHP:
    Descarta as chaves e reorganiza apenas os valores, convertendo o array em um array indexado
    (com índices numéricos de 0 em diante)
-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Embaralhando um array: shuffle()</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <?php
            echo "<hr>";

            // Criação de um array associativo
            $array = [
                "nome" => "Maria",
                "idade" => 40,
                "peso" => 50.5
            ];

            // Exibe o array original
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            // Aplica a função shuffle() para embaralhar os elementos do array
            shuffle($array); // IMPORTANTE: isso remove as chaves associativas

            // Exibe o array após o embaralhamento
            echo "<pre>";
            print_r($array);
            echo "</pre>";
        ?>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>
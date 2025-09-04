<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Concatenando o array com implode()</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <?php
            echo "<hr>";

            // Criação de um array associativo com três elementos
            $array = [
                "nome" => "Maria",
                "idade" => 40,
                "peso" => 50.5
            ];

            // Exibe o conteúdo do array original de forma formatada
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            // array_filter() remove qualquer valor "falso" (como null, 0, string vazia, etc)
            // implode(" ", ...) junta os valores do array resultante em uma única string, separados por espaço
            $registro = implode(" ", array_filter($array));

            // Exibe a string concatenada
            echo "<hr>";
            print_r("Valor extraído: " . $registro);
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
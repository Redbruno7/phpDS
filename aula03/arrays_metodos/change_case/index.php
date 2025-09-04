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
        <h1>Mudando o Case: array_change_key_case()</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <?php
            echo "<hr>";

            // Criação de um array com chaves em cases variados
            $array = [
                "Nome" => "Maria",
                "idade" => 40,
                "PESO" => 50.5
            ];

            // Exibe o array original
            echo "<pre>";
            print_r($array);
            echo "</pre>";

            // Converte todas as chaves do array para minúsculas (CASE_LOWER)
            $indice_minusculo = array_change_key_case($array, CASE_LOWER);

            // Exibe o array com chaves em minúsculas
            echo "<pre>";
            echo "Índice Minúsculo: <br>";
            print_r($indice_minusculo);
            echo "</pre>";

            // Converte todas as chaves do array para maiúsculas (CASE_UPPER)
            $indice_maiusculo = array_change_key_case($array, CASE_UPPER);

            // Exibe o array com chaves em maiúsculas
            echo "<pre>";
            echo "Índice Maiúsculo: <br>";
            print_r($indice_maiusculo);
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
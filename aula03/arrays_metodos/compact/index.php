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
        <h1>Extraindo criando um array: compact()</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <?php
            echo "<hr>";

            // Declaração de variáveis individuais
            $nome = "Maria";
            $idade = 50;
            $peso = 50.5;

            // A função compact() cria um array associativo com base nas variáveis informadas
            // As chaves do array serão os nomes das variáveis ("nome", "idade", "peso")
            // E os valores serão os valores dessas variáveis
            $array = compact("nome", "idade", "peso");

            // Exibe o array resultante no navegador, formatado para melhor visualização
            echo "<pre>";
                print_r($array); // Mostra o array: Array ( [nome] => Maria [idade] => 50 [peso] =>50.5 )
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
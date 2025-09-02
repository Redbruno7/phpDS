<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Resultado</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <article class="caixa">
            <?php
                if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operacao"])) {
                    $num1 = $_POST["num1"];
                    $num2 = $_POST["num2"];
                    $operacao = $_POST["operacao"];
                    $resultado = "";

                    switch ($operacao) {
                        case "soma":
                            $resultado = $num1 + $num2;
                            echo "<p>$num1 + $num2 = <strong>$resultado</strong></p>";
                            break;
                        case "subtracao":
                            $resultado = $num1 - $num2;
                            echo "<p>$num1 - $num2 = <strong>$resultado</strong></p>";
                            break;
                        case "multiplicacao":
                            $resultado = $num1 * $num2;
                            echo "<p>$num1 * $num2 = <strong>$resultado</strong></p>";
                            break;
                        case "divisao":
                            if ($num2 != 0) {
                                $resultado = $num1 / $num2;
                                echo "<p>$num1 / $num2 = <strong>$resultado</strong></p>";
                            } else {
                                echo "<p style='color:red;'>Erro: divisão por zero não permitida.</p>";
                            }
                            break;
                        default:
                            echo "<p>Operação inválida.</p>";
                    }
                } else {
                    echo "<p>Preencha todos os campos corretamente.</p>";
                }
            ?>
            <a href="index.php">Voltar</a>
        </article>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>
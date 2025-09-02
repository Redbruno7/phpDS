<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora: Operadores Aritméticos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <!--Cabeçalho do Site-->
    <header>
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>

    <!--Container para o conteúdo-->
    <main>
        <article class="caixa">
            <form action="resultado.php" method="post" id="formCalc">
                <label for="num1">Digite o primeiro número:</label>
                <input type="number" name="num1" id="num1">
                
                <label for="num2">Digite o segundo número:</label>
                <input type="number" name="num2" id="num2">

                <label for="operacao">Escola a operação:</label>
                <select name="operacao" id="operacao">
                    <option value="">-- Selecione --</option>
                    <option value="soma">Soma</option>
                    <option value="subtracao">Subtração</option>
                    <option value="multiplicacao">Multiplicação</option>
                    <option value="divisao">Divisão</option>
                </select>

                <button type="submit">Calcular</button>
            </form>
        </article>
    </main>

    <!--Rodapé da página-->
    <footer>
        
    </footer>

    <!--Javascript-->
    <script src="js/script.js"></script>
</body>

</html>
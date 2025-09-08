<?php
// Função que gera a tabuada de um número
function gerarTabuada($numero) {
    echo "<h3>Tabuada do $numero</h3>";
    echo "<ul>";

    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "<li>$numero * $i = $resultado</li>";
    }

    echo "</ul>";
}
?>
<?php
// Função que conta vogais em uma frase
function contarVogais($frase) {
    $vogais = ["a", "e", "i", "o", "u"];
    $contagem = array_fill_keys($vogais, 0);

    // Percorre a frase
    $frase = mb_strtolower($frase);     // Ignora maiúsculas/minúculas
    for ($i = 0; $i < mb_strlen($frase); $i++) {
        $letra = mb_substr($frase, $i, 1);
        if (array_key_exists($letra, $contagem)) {
            $contagem[$letra]++;
        }
    }

    // Exibe resultado
    echo "<article class='resultado'>";
    echo "<h3>Frase analisada:</h3><p><em>\"$frase\"</em></p>";
    echo "<h4>Contagem de vogais:</h4><ul>";
    foreach ($contagem as $vogal => $qtd) {
        echo "<li><strong>$vogal</strong>: $qtd</li>";
    }
    echo "</ul></article>";
}
?>
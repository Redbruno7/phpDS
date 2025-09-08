<?php
// Função para calcular a média e retornar a situação do aluno
function avaliarAluno($nome, $notas) {
    $media = array_sum($notas) / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    echo "<article class='resultado'>";
    echo "<h3>Aluno: $nome</h3>";
    echo "<p>Notas: " . implode(", ", $notas) . "</p>";
    echo "<p>Média: " . number_format($media, 1, ",", ".") . "</p>";
    echo "<p><strong>Situação: $situacao</strong></p>";
    echo "</article>";
}
?>
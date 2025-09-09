<?php
session_start();

// Array de usuários e senhas
$usuarios = [
    "bruno" => "1234",
    "laura" => "abcd",
    "admin" => "admin"
];

function verificarLogin($usuario, $senha, $usuarios) {
    return isset($usuarios[$usuario]) && $usuarios[$usuario] === $senha;
}

// Inicializa variáveis de sessão
if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}
if (!isset($_SESSION['bloqueio'])) {
    $_SESSION['bloqueio'] = 0;
}

// Verifica se está bloqueado
if ($_SESSION['tentativas'] >= 3) {
    $tempoBloqueio = 60; // segundos
    $tempoRestante = $tempoBloqueio - (time() - $_SESSION['bloqueio']);

    if ($tempoRestante > 0) {
        echo "<h2>Você excedeu o limite de tentativas. 
              Tente novamente em {$tempoRestante} segundos.</h2>";
        echo "<a href='../index.php'>Voltar</a>";
        exit;
    } else {
        // Tempo já passou → reseta
        $_SESSION['tentativas'] = 0;
        $_SESSION['bloqueio'] = 0;
    }
}

// Pega dados do formulário
$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

// Verifica login
if (verificarLogin($usuario, $senha, $usuarios)) {
    $_SESSION['tentativas'] = 0; // reseta tentativas
    $_SESSION['bloqueio'] = 0;
    $_SESSION['logado'] = true;
    header("Location: area_restrita.php");
    exit;
} else {
    $_SESSION['tentativas']++;

    if ($_SESSION['tentativas'] >= 3) {
        $_SESSION['bloqueio'] = time(); // marca hora do bloqueio
        echo "<h3>Você errou 3 vezes! Login bloqueado por 1 minuto.</h3>";
    } else {
        echo "<h3>Usuário ou senha incorretos! Tentativa {$_SESSION['tentativas']} de 3.</h3>";
    }

    echo "<a href='../index.php'>Voltar</a>";
}
?>

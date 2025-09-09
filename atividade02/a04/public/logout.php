<?php
session_start();
session_unset();   // limpa todas as variáveis da sessão
session_destroy(); // encerra a sessão
header("Location: ../index.php"); // volta pro login
exit;
?>

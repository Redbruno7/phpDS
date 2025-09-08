<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $frase = trim($_POST["frase"]);
    header("Location: ../index.php?frase=" . urldecode($frase));
    exit();
}
?>
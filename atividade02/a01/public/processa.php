<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);
    header("Location: ../index.php?numero=$numero");
    exit();
}
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["cxnome"];
    echo "Nome: " . $nome;
}
    elseif($_SERVER["REQUEST_METHOD"] == "GET") {
        $nome = $_GET["cxnome"];
    echo "Nome: " . $nome;
    }

?>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $clientes = isset($_SESSION["clientes"]) ? $_SESSION["clientes"] : [];

    foreach ($clientes as $cliente) {
        if ($cliente["email"] === $email && $cliente["senha"] === $senha) {
            $_SESSION["usuario_logado"] = $cliente;
            header("Location: home.php");
            exit();
        }
    }
    
    echo "E-mail ou senha incorretos. Tente novamente.";
}
?>

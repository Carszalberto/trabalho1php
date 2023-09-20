<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

        if (strlen($senha) >= 8) {

            $cliente = [
                "nome" => $nome,
                "email" => $email,
                "senha" => $senha
            ];
            $_SESSION["clientes"][] = $cliente;
            
            header("Location: login.php");
            exit();
        } else {
            echo "A senha deve ter pelo menos 8 caracteres.";
        }
    } else {
        echo "Endereço de e-mail inválido.";
    }
}
?>

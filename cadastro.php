<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Cliente</title>
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form action="processar_cadastro.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="senha">Senha (mínimo 8 caracteres):</label>
        <input type="password" id="senha" name="senha" minlength="8" required><br><br>
        
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>

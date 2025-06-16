<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="page">
        <form method="POST" action="logout.php" class="formLogin">
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required autofocus />

            <label for="password">Senha</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" required />

            <div class="links">
    <a href="http://localhost/TCC/Esqueceu_senha.php">Esqueci minha senha</a>
    <a href="http://localhost/TCC/Cadastro.php" style="margin-left: 149px;">Crie sua conta </a>
            </div>
            
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
</body>
</html>

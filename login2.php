<?php
session_start();
if (isset($_SESSION["usuario"])) {
    header("Location: dashboard.php");
    exit();
}

// Pega o erro se houver
$erro = "";
if (isset($_SESSION["error"])) {
    $erro = $_SESSION["error"];
    unset($_SESSION["error"]);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #44576d, #6f91a8);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .page {
            display: flex;
            width: 90%;
            max-width: 1000px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .left, .right {
            flex: 1;
        }

        .left {
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, rgba(255,255,255,0.95), rgba(255,255,255,0.9));
        }

        .formLogin {
            display: grid;
            gap: 12px;
            width: 90%;
            max-width: 350px;
        }

        .formLogin h1, .formLogin p {
            text-align: center;
            margin: 0;
            color: #1e2a38;
        }

        .formLogin label {
            font-size: 14px;
            font-weight: 600;
            color: #34495e;
        }

        .formLogin input[type="email"],
        .formLogin input[type="password"] {
            padding: 12px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 6px;
            outline: none;
            transition: all 0.2s ease;
        }

        .formLogin input:focus {
            border-color: #3f88c5;
            box-shadow: 0 0 0 2px rgba(63, 136, 197, 0.2);
        }

        .btn {
            background-color: #3f88c5;
            color: #ffffff;
            font-size: 14px;
            font-weight: 600;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .btn:hover {
            background-color: #316eaa;
            transform: translateY(-1px);
        }

        .links {
            text-align: center;
            margin-top: 12px;
        }

        .links a {
            color: #3f88c5;
            text-decoration: none;
            font-weight: 600;
            margin: 0 6px;
        }

        .right {
            background: url('https://sdmntprwestus.oaiusercontent.com/files/00000000-2740-6230-a3f6-960d59f32bab/raw?se=2025-04-10T14%3A11%3A02Z&sp=r&sv=2024-08-04&sr=b&scid=6b2ab4d7-63b3-59e9-98b7-d52998126aaf&skoid=e825dac8-9fae-4e05-9fdb-3d74e1880d5a&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-04-09T20%3A53%3A49Z&ske=2025-04-10T20%3A53%3A49Z&sks=b&skv=2024-08-04&sig=OD8nl%2B9%2Brml5198AVXCSD3wT16P%2BVFmUFPUmqhs87Ls%3D') no-repeat center center;
            background-size: cover;
        }


        .right img{
            width: 150%;
            max-width: 599px;
            height: auto;
            object-fit: contain;
            border-radius: 0px;
        }

        @media (max-width: 768px) {
            .page {
                flex-direction: column;
                height: auto;
            }

            .right {
                display: none;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <div class="left">
        <form method="POST" action="processa_login2.php" class="formLogin">
    <h1>Login</h1>
    <p>Digite os seus dados de acesso no campo abaixo.</p>

    <label for="email">E-mail</label>
    <input type="email" name="email" id="email" placeholder="Digite seu e-mail" required autofocus />

    <label for="password">Senha</label>
    <input type="password" name="password" id="password" placeholder="Digite sua senha" required />

    <?php if (!empty($erro)): ?>
        <div style="color: #e74c3c; font-weight: 600; font-size: 13px; margin-top: 6px; text-align: left;">
            <?= htmlspecialchars($erro) ?>
        </div>
    <?php endif; ?>

    <div class="links">
        <a href="Esqueceu_senha.php">Esqueci minha senha</a>
        <a href="Cadastro_da_empresa.php">Crie sua conta</a>
    </div>

    <input type="submit" value="Acessar" class="btn" />
</form>
        </div>
        <div class="right">
            <img src="Imagens/foto.png" alt="Imagem de login">
        </div>
    </div>
   

</body>
</html>  

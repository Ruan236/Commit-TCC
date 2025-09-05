<?php
session_start();

if (!isset($_SESSION["usuario"])) {
    header("Location:index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Área Restrita</title>
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
            text-align: center;
            color: #1e2a38;
        }

        .formLogin h1 {
            margin-bottom: 12px;
            font-weight: 600;
        }

        .formLogin p {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 16px;
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
            text-decoration: none;
            display: inline-block;
        }

        .btn:hover {
            background-color: #316eaa;
            transform: translateY(-1px);
        }

        .right {
            display: flex;
            align-items: center;
            justify-content: center;
            background: none;
        }

        .right img {
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
            <div class="formLogin">
                <h1>Bem-vindo, 
                <?php 
                if (isset($_SESSION["usuario"]["nome"])) {
                    echo htmlspecialchars($_SESSION["usuario"]["nome"]);
                } else {
                    echo "Usuário";
                }
                ?>!</h1>
                <p>Você está logado.</p>
                <a href="logado_P.php" class="btn">Entrar</a>
                <p style="margin-top: 20px; font-size: 14px; color: #34495e;">
                    quer voltar para o login? <a href="logout.php" style="color: #3f88c5; font-weight: 600; text-decoration: none;">Clique aqui</a>
                </p>
            </div>
        </div>
        <div class="right">
            <img src="Imagens/foto.png" alt="Imagem área restrita" />
        </div>
    </div>
</body>
</html>

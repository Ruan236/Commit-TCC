<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperação de Senha</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* So pra testar*/
        /* Reset de margin e padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilo do body */
        body {
            font-family: Arial, sans-serif;
            background: #34495e;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilo do container */
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Título */
        h1 {
            color: black;
            font-size: 24px;
            margin-bottom: 20px;
        }

        /* Estilo do formulário */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #34495e;
        }

        /* Botão */
        .btn {
            background-color: #3f88c5;
            color: white;
            padding: 14px;
            width: 100%;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        

        .btn:hover {
            background-color: #316eaa;
        }

        /* Link de voltar */
        .back-link {
            margin-top: 20px;
            color: #4a90e2;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        /* Mensagem de erro */
        .error {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Recuperação de Senha</h1>
        
        <form action="processa_recuperacao.php" method="post">
            <div class="form-group">
                <input type="email" name="email" placeholder="Digite seu e-mail" required>
            </div>
            <a href="http://localhost/TCC/processa_login.php"> <button type="submit" class="btn">Enviar Link de Recuperação</button >
        </form>
        <br>
        <br>
        
        <p><a href="login.php" class="back-link">Voltar para o Login</a></p>

        <?php if(isset($_GET['erro'])) { ?>
            <p class="error">E-mail não encontrado. Tente novamente.</p>
        <?php } ?>
    </div>

</body>
</html>

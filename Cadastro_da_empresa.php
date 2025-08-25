<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: dashboard.php');
    exit();
}


$error = $_SESSION['error'] ?? '';
$success = $_SESSION['success'] ?? '';


unset($_SESSION['error'], $_SESSION['success']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Cadastro Empresa</title>
    <style>
        
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            margin: 0; padding: 0;
            height: 100vh;
            background: linear-gradient(135deg, #44576d, #6f91a8);
            display: flex; align-items: center; justify-content: center;
        }
        .page {
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            width: 100%; padding: 20px;
        }
        .formLogin {
            display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;
            background-color: #fff; border-radius: 10px; padding: 20px;
            box-shadow: 0 6px 16px rgba(68,87,109,0.6), 0 12px 32px rgba(111,145,168,0.5), 0 18px 48px rgba(68,87,109,0.4);
            width: 100%; max-width: 600px; margin: 0 auto;
        }
        .formLogin h1, .formLogin p {
            grid-column: span 2; text-align: center; color: #1e2a38;
        }
        .input-group {
            display: flex; flex-direction: column;
        }
        .formLogin input, .formLogin select {
            padding: 10px; font-size: 12px; border: 1px solid #ccc;
            margin-bottom: 10px; margin-top: 5px; border-radius: 4px;
            transition: all linear 160ms; outline: none;
        }
        .formLogin input:focus, .formLogin select:focus {
            border: 1px solid #28b6da;
            box-shadow: 0 0 0 2px rgba(40,182,218,0.2);
        }
        .formLogin label {
            font-size: 14px; font-weight: 700; color: #1e2a38;
        }
        .btn {
            grid-column: span 2;
            background-color: #3f88c5; color: #fff; font-size: 12px;
            font-weight: 600; border: none; cursor: pointer;
            padding: 5px; border-radius: 5px;
            transition: all linear 160ms;
        }
        .btn:hover {
            transform: scale(1.05);
            background-color: #346699;
        }
        .message {
            grid-column: span 2; text-align: center;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .error {
            color: #d9534f;
        }
        .success {
            color: #28a745;
        }
        .login2-link {
            grid-column: span 2; text-align: center; margin-top: 10px;
        }
        .login2-link a {
            color: #3f88c5; text-decoration: none; font-weight: 600;
        }
        @media (max-width: 600px) {
            .formLogin {
                grid-template-columns: 1fr; padding: 20px;
            }
            .formLogin h1 {
                font-size: 24px;
            }
            .formLogin p {
                font-size: 12px;
            }
            .formLogin input, .formLogin select {
                font-size: 12px;
            }
            .btn {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="page">
        <form method="POST" action="processa_login2.php" class="formLogin" onsubmit="return validarFormulario()">
            <h1>Cadastro</h1>
            <p>Preencha os campos abaixo para criar sua conta.</p>

            <!-- Mensagens de erro e sucesso -->
            <?php if ($error): ?>
                <div class="message error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <?php if ($success): ?>
                <div class="message success"><?= htmlspecialchars($success) ?></div>
            <?php endif; ?>

            <div class="input-group">
                <label for="nome_empresa">Nome</label>
                <input type="text" name="nome_empresa" id="nome_empresa" placeholder="Digite o nome da sua empresa" required />
            </div>

            <div class="input-group">
                <label for="cnpj">CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" placeholder="Apenas números" maxlength="18" required oninput="formatarCNPJ(this)" />
            </div>

            <div class="input-group">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" placeholder="(DDD) XXXXX-XXXX" oninput="formatarTelefone(this)" />

            </div>

            <div class="input-group">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" placeholder="XXXXX-XXX" maxlength="9" required oninput="formatarCEP(this)" />
            </div>

            <div class="input-group">
                <label for="email_empresarial">E-mail</label>
                <input type="email" name="email_empresarial" id="email_empresarial" placeholder="Digite seu e-mail empresarial" required />
            </div>

            <div class="input-group">
                <label for="cargo">Cargo</label>
                <select name="cargo" id="cargo" required>
                    <option value="" disabled selected>Selecione seu cargo</option>
                    <option value="chefe">Chefe</option>
                    <option value="gerente">Gerente</option>
                </select>
            </div>

            <div class="input-group">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" placeholder="Mínimo de 6 caracteres" required minlength="6" />
            </div>

            <div class="input-group">
                <label for="confirmar_senha">Confirme a Senha</label>
                <input type="password" name="confirmar_senha" id="confirmar_senha" placeholder="Mínimo de 6 caracteres" required minlength="6" />
            </div>

            <input type="submit" value="Cadastrar-se" class="btn" />
            
            <div class="login2-link">
                <p>Já tem uma conta? <a href="login2.php">Faça login aqui</a></p>
            </div>
        </form>
    </div>

    <script>
    function formatarCNPJ(input) {
    let cnpj = input.value.replace(/\D/g, "").slice(0, 14); // Limita a 14 números
    cnpj = cnpj.replace(/^(\d{2})(\d)/, "$1.$2");
    cnpj = cnpj.replace(/^(\d{2})\.(\d{3})(\d)/, "$1.$2.$3");
    cnpj = cnpj.replace(/\.(\d{3})(\d)/, ".$1/$2");
    cnpj = cnpj.replace(/(\d{4})(\d)/, "$1-$2");
    input.value = cnpj;
}

    function formatarCEP(input) {
        let cep = input.value.replace(/\D/g, "").slice(0, 8);
        if (cep.length > 5) {
            input.value = cep.substring(0, 5) + "-" + cep.substring(5);
        } else {
            input.value = cep;
        }
    }

    function formatarTelefone(input) {
        let tel = input.value.replace(/\D/g, "").slice(0, 11);
        tel = tel.replace(/^(\d{2})(\d)/g, "($1) $2");
        tel = tel.replace(/(\d{5})(\d{1,4})$/, "$1-$2");
        input.value = tel;
    }

    function validarFormulario() {
        const senha = document.getElementById('senha').value;
        const confirmarSenha = document.getElementById('confirmar_senha').value;

        if (senha !== confirmarSenha) {
            alert("As senhas não coincidem.");
            return false;
        }

        return true;
    }
</script>

</body>
</html>

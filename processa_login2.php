<?php
session_start();
require 'conn2.php'; // sua conexão com o banco

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $senha = $_POST['password'] ?? '';

    if (empty($email) || empty($senha)) {
        $_SESSION['error'] = "Preencha todos os campos.";
        header("Location: login2.php");
        exit();
    }

    // Consulta o usuário no banco
    $stmt = $conexao_empresa->prepare("SELECT id_empresa, nome_empresa, senha FROM cadastro_empresa WHERE email_empresarial = ?");
 $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            // Login bem-sucedido
            $_SESSION['usuario'] = [
                'id' => $usuario['id_empresa'], // <- deve ser id_empresa, igual ao que você selecionou
                'nome' => $usuario['nome_empresa']
            ];
            
            header("Location: dashboard_E.php");
            exit();
        } else {
            $_SESSION['error'] = "Senha incorreta.";
            header("Location: login2.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "E-mail não encontrado.";
        header("Location: login2.php");
        exit();
    }

    $stmt->close();
    $conexao_empresa->close();
}
?>

<?php
session_start();
include 'conn.php'; // sua conexão com o banco

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['password'];

    $sql = "SELECT * FROM cadastro WHERE email = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        // Verifica se a senha está correta
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['usuario'] = $usuario['nome'];
            $_SESSION['usuario_id'] = $usuario['id_usuarios'];
            header("Location: dashboard.php");
            exit();
        } else {
            // Senha incorreta
            $_SESSION['error'] = "Senha incorreta.";
            header("Location: login.php");
            exit();
        }
    } else {
        // E-mail não cadastrado no banco
        $_SESSION['error'] = "E-mail não encontrado. Crie sua conta.";
        header("Location: login.php");
        exit();
    }

    $stmt->close();
    $conexao->close();
}
?>

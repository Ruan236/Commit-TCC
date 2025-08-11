<?php
session_start();
require 'conn2.php'; // conexão com o banco (usa $conexao_empresa)

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_empresa       = $conexao_empresa->real_escape_string($_POST['nome_empresa']);
    $cnpj               = $conexao_empresa->real_escape_string($_POST['cnpj']);
    $telefone           = $conexao_empresa->real_escape_string($_POST['telefone']);
    $cep                = $conexao_empresa->real_escape_string($_POST['cep']);
    $email_empresarial  = $conexao_empresa->real_escape_string($_POST['email_empresarial']);
    $cargo              = $conexao_empresa->real_escape_string($_POST['cargo']);
    $senha              = $_POST['senha'];
    $confSenha          = $_POST['confirmar_senha'];

    if ($senha !== $confSenha) {
        $_SESSION['error'] = "As senhas não coincidem.";
        header("Location: cadastro_da_empresa.php");
        exit();
    }

    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Corrigido para os nomes reais das colunas no banco
    $sql = "INSERT INTO cadastro_empresa (nome_empresa, cnpj, telefone, cep, email_empresarial, cargo, senha) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao_empresa->prepare($sql);
    if (!$stmt) {
        $_SESSION['error'] = "Erro no banco: " . $conexao_empresa->error;
        header("Location: cadastro_empresa.php");
        exit();
    }

    // Corrigido para as variáveis certas
    $stmt->bind_param("sssssss", $nome_empresa, $cnpj, $telefone, $cep, $email_empresarial, $cargo, $senha_hash);

    if ($stmt->execute()) {
        $_SESSION['success'] = "Cadastro realizado com sucesso! Faça login.";
        header("Location: login2.php");
        exit();
    } else {
        $_SESSION['error'] = "Erro ao cadastrar: " . $stmt->error;
        header("Location: cadastro_empresa.php");
        exit();
    }

    $stmt->close();
}

$conexao_empresa->close();
?>

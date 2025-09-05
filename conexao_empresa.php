<?php
include 'conn2.php'; // cria $conexao_empresa

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitiza dados vindos do form
    $nome = $conexao_empresa->real_escape_string($_POST["nome_empresa"]);
    $cnpj = $conexao_empresa->real_escape_string($_POST["cnpj"]);
    $telefone = $conexao_empresa->real_escape_string($_POST["telefone"]);
    $email_empresarial = $conexao_empresa->real_escape_string($_POST["email_empresarial"]);
    $cargo = $conexao_empresa->real_escape_string($_POST["cargo"]);
    $cep = $conexao_empresa->real_escape_string($_POST["cep"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Insere na tabela com as colunas corretas
    $sql = "INSERT INTO cadastro_empresa (nome_empresa, cargo, telefone, cnpj, email_empresarial, cep, senha)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao_empresa->prepare($sql);
    $stmt->bind_param("sssssss", $nome, $cargo, $telefone, $cnpj, $email_empresarial, $cep, $senha);

    if ($stmt->execute()) {
        header("Location: login2.php"); // volta pro login após cadastrar
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conexao_empresa->close();
}
?>

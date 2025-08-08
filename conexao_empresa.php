<?php
include 'conn2.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Receber e sanitizar os dados
    $nome = $conexao->real_escape_string($_POST["nome"]);
    $cnpj = $conexao->real_escape_string($_POST["cnpj"]);
    $telefone = $conexao->real_escape_string($_POST["telefone"]);
    $email_empresarial = $conexao->real_escape_string($_POST["email_empresarial"]);
    $cargo = $conexao->real_escape_string($_POST["cargo"]);
    $cep = $conexao->real_escape_string($_POST["cep"]);
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // SQL corrigido: nome da tabela que você está usando
    $sql = "INSERT INTO cadastro_empresa (nome, cargo, telefone, cnpj, email_empresarial, cep, senha) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    if (!$stmt) {
        die("Erro na preparação da query: " . $conexao->error);
    }

    // Bind das variáveis corretas
    $stmt->bind_param("sssssss", $nome, $cargo, $telefone, $cnpj, $email_empresarial, $cep, $senha);

    if ($stmt->execute()) {
        // Cadastro OK - redireciona
        header("Location: login2.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
}
?>

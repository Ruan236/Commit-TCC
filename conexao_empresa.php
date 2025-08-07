<?php
include 'conn.php'; // Arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capturando os dados do formulário
    $nome_empresa = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $telefone = $_POST["telefone"];
    $email_empresarial = $_POST["email"];
    $cep = $_POST["cep"];
    $cargo = $_POST["cargo"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

    // Inserção no banco de dados correto
    $sql = "INSERT INTO cadastro_empresa (nome_empresa, cnpj, email_empresarial, telefone, cep, cargo, senha)
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssss", $nome_empresa, $cnpj, $email_empresarial, $telefone, $cep, $cargo, $senha);

    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
        header("Location: login.php");
        exit();
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
}
?>

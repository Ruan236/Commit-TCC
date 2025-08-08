<?php
include 'conn2.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $telefone = $_POST["telefone"];
    $email_empresarial = $_POST["email_empresarial"];
    $cargo = $_POST["cargo"];
    $cep = $_POST["cep"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); 

    
    $sql = "INSERT INTO cadastro (nome, cargo, telefone, cnpj, email_empresarial, cep, senha) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssss", $nome, $cpf, $telefone, $data_nascimento, $email, $cep, $senha);

    
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    
    $stmt->close();
    $conexao->close();
}

header("location:login2.php");
exit();
?>
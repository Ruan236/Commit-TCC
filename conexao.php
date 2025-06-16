<?php
include 'conn.php'; // Inclui o arquivo de conexão com o banco de dados

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtendo os dados do formulário
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $email = $_POST["email"];
    $cep = $_POST["cep"];
    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT); // Hash da senha para segurança

    // Preparando a consulta SQL
    $sql = "INSERT INTO cadastro (nome, cpf, telefone, data_nascimento, email, cep, senha) 
            VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssssss", $nome, $cpf, $telefone, $data_nascimento, $email, $cep, $senha);

    // Executa a inserção no banco
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao cadastrar: " . $stmt->error;
    }

    // Fecha a conexão
    $stmt->close();
    $conexao->close();
}

header("location:http://localhost/TCC/login.php");
exit();
?>

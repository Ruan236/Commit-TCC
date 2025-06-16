<?php
$servidor = "localhost"; // Ou IP do servidor MySQL
$usuario = "root"; // Usuário do MySQL
$senha = ""; // Senha do MySQL (deixe vazia se estiver local)
$banco = "teste_tcc"; // Nome do banco de dados

// Criando a conexão
$conexao = new mysqli($servidor, $usuario, $senha, $banco);

// Verificando a conexão
if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
} else {
    echo "Conexão bem-sucedida!";
}
?>

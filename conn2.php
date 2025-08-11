<?php
// conn2.php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "teste_tcc";

$conexao_empresa = new mysqli($host, $user, $pass, $dbname);

if ($conexao_empresa->connect_error) {
    die("Erro na conexão: " . $conexao_empresa->connect_error);
}
?>

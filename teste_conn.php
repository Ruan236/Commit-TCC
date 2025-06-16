<?php
$conn = new mysqli("localhost", "root", "", "teste_tcc");

if ($conn->connect_error) {
    die("Erro ao conectar: " . $conn->connect_error);
}
echo "Conectado com sucesso!";
?>
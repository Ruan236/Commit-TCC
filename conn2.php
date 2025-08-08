<?php
$servidor = "localhost"; 
$usuario  = "root"; 
$senha    = ""; 
$banco    = "cadastro_empresa"; 

$conexao2 = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao2->connect_error) {
    die("Falha na conexão: " . $conexao2->connect_error);
}
?>

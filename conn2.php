<?php
$servidor = "localhost"; 
$usuario  = "root"; 
$senha    = ""; 
$banco    = "teste_tcc"; 

$conexao_empresa = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao2->connect_error) {
    die("Falha na conexão: " . $conexao_empresa->connect_error);
}
?
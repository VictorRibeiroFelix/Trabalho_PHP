<?php 

$usuario = trim($_POST['usuario']); 
$senha = trim($_POST['senha']); 

echo "Usuario: " . $usuario . "</br>"; 

echo "Senha: " . md5($senha) . "</br>" . "</br>";  

?>
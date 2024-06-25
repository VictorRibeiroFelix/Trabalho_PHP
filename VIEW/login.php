<?php 
   include_once 'C:\xampp\htdocs\Trabalho\DAL\conexao.php';

    $usuario = trim($_POST['usuario']); 
    $senha = trim($_POST['senha']); 

   $sql = "Select * from usuario where usuario= ?;";
   $con = DAL\Conexao::conectar(); 
   $query = $con->prepare($sql);
   $query->execute ([$usuario]);
   $linha = $query->fetch(\PDO::FETCH_ASSOC);
   DAL\Conexao::desconectar(); 

    echo "Usuario: " . $linha['usuario'] . "</br>"; 
    echo "Senha banco: " . $linha['senha']. "</br>" . "</br>";

?>
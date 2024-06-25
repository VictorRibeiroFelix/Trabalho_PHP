<?php 
    namespace VIEW\Funcionario;
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';

    $id = $_GET['id'];

    $bllFunc = new \BLL\Funcionario(); 
    $result =  $bllFunc->Delete($id);  
  
    header("location: lstFuncionario.php");


?>
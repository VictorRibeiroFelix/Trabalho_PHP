<?php 
    namespace VIEW\Cliente;
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Cliente.php';

    $id = $_GET['id'];

    $bllClie = new \BLL\Cliente(); 
    $result =  $bllClie->Delete($id);  
  
    header("location: lstCliente.php");


?>
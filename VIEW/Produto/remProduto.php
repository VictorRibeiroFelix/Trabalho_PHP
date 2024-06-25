<?php 
    namespace VIEW\Cliente;
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Produto.php';

    $id = $_GET['id'];

    $bllProduto= new \BLL\Produto(); 
    $result =  $bllProduto->Delete($id);  
  
    header("location: lstProduto.php");


?>
<?php 
    namespace VIEW\Fornecedor;
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';

    $id = $_GET['id'];

    $bllForne = new \BLL\Fornecedor(); 
    $result =  $bllForne->Delete($id);  
  
    header("location: lstFornecedor.php");


?>

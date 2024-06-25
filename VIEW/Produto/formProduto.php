<?php

use DAL\Produto as DALProduto;
use MODEL\Produto;
$bllProduto = new BLL\Produto();
$Produtos = $dalProduto->Insert();

include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Produto.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Produto.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';
require_once 'C:\xampp\htdocs\Trabalho2\DAL\Conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Produto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    #formProduto {
      max-width: 300px;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="number"], input[type="text"] {
      width: 100%;
      height: 30px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
    }
    select {
      width: 100%;
      height: 30px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <h1>Cadastrar Produto</h1>
  <form id="formProduto">
    <h2>Cadastrar Produto</h2>
    <label for="produtoDescricao">Descriçao do Produto:</label>
    <input type="text" id="produtoDescricao" name="produtoDescricao">
    <br><br>
    <label for="produtoMarca">Marca do Produto:</label>
    <input type="text" id="produtoMarca" name="produtoMarca">
    <br><br>
    <label for="produtoPreco">Preço do Produto:</label>
    <input type="number" id="produtoPreco" name="produtoPreco">
    <br><br>
    <label for="fornecedorId">Fornecedor:</label>
    <select id="fornecedorId" name="fornecedorId">
      <?php foreach ($Fornecedores as $Fornecedor) {?>
        <option value="<?php echo $Fornecedor->getId();?>"><?php echo $Fornecedor->getNome();?></option>
      <?php }?>
    </select>
    <br><br>
    <input type="submit" value="Cadastrar Produto">
  </form>
</body>
</html>
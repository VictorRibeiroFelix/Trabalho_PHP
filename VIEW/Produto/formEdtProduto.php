<?php
include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Produto.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Produto.php';
$id = $_GET['id'];

$bllProduto = new BLL\Produto();
$Produto = $bllProduto->SelectByID($id);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Editar Produto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    #formEdtProduto {
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
  <h1>Editar Produto</h1>
  <form id="formEdtProduto">
    <h2>Editar Produto</h2>
    <label for="produtoId">ID do Produto:</label>
    <input type="number" id="produtoId" name="produtoId" value="<?php echo $Produto->getId(); ?>" readonly>
    <br><br>
    <label for="produtoDescricao">Descriçao do Produto:</label>
    <input type="text" id="produtoDescricao" name="produtoDescricao" value="<?php echo $Produto->getDescricao(); ?>">
    <br><br>
    <label for="produtoMarca">Marca do Produto:</label>
    <input type="text" id="produtoMarca" name="produtoMarca" value="<?php echo $Produto->getMarca(); ?>">
    <br><br>
    <label for="produtoPreco">Preço do Produto:</label>
    <input type="number" id="produtoPreco" name="produtoPreco" value="<?php echo $Produto->getPreco(); ?>">
    <br><br>
    <input type="submit" value="Salvar Alterações">
  </form>
</body>
</html>
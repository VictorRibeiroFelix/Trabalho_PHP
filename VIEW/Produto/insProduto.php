<?php

include_once 'C:\xampp\htdocs\Trabalho2\MODEL/Produto.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL/Produto.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL/Fornecedor.php';

// Crie a conexão com o banco de dados
$pdo = new PDO('mysql:host=localhost;dbname=trabalho2', 'root', ''); // Substitua os valores
$bllProduto = new BLL\Produto($pdo); // Passe a conexão para a BLL
$bllForn = new BLL\Fornecedor($pdo); // Passe a conexão para a BLL (se necessário)

// Recupera a lista de fornecedores do banco de dados
$Fornecedores = $bllForn->Select();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Recupera os dados do formulário
  $prodId = isset($_POST['txtID']) ? $_POST['txtID'] : null;
  $prodDescricao = $_POST['txtDescricao'];
  $prodMarca = $_POST['txtMarca'];
  $prodPreco = $_POST['txPreco'];
  $fornecedorId = $_POST['fornecedorId'];

  $novoProduto = new MODEL\Produto();
  $novoProduto->setId($prodId);
  $novoProduto->setDescricao($prodDescricao);
  $novoProduto->setMarca($prodMarca);
  $novoProduto->setPreco($prodPreco);
  $novoProduto->setFornecedorId($fornecedorId);

  // Tenta inserir o produto no banco de dados
  $resultado = $bllProduto->Insert($novoProduto); // Use $bllProduto

  if ($resultado) {
    header('Location: lstProduto.php?sucesso=1');
    exit;
  } else {
    header('Location: insProduto.php?erro=1');
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Produto</title>
  <style>
    /* Estilos CSS */
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
  <h1>Inserir Produto</h1>
  <form id="formProduto" method="post">
    <h2>Inserir Produto</h2>
    <label for="txtID">ID do Produto (opcional):</label>
    <input type="number" id="txtID" name="txtID">
    <br><br>
    <label for="txtDescricao">Descrição do Produto:</label>
    <input type="text" id="txtDescricao" name="txtDescricao" required>
    <br><br>
    <label for="txtMarca">Marca do Produto:</label>
    <input type="text" id="txtMarca" name="txtMarca" required>
    <br><br>
    <label for="txPreco">Preço do Produto:</label>
    <input type="number" id="txPreco" name="txPreco" required>
    <br><br>
    <label for="fornecedorId">Fornecedor:</label>
    <select id="fornecedorId" name="fornecedorId" required>
      <?php foreach ($Fornecedores as $forne) {?> 
        <option value="<?php echo $forne->getId();?>"><?php echo $forne->getNome();?></option>
      <?php }?>
    </select>
    <br><br>
    <input type="submit" value="Inserir Produto">
  </form>
</body>
</html>
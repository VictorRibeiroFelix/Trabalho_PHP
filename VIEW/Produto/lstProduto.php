<?php 
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Produto.php';

use BLL\Produto;

$pdo = new PDO('mysql:host=localhost;dbname=trabalho2', 'root', ''); 
$bllProd = new \BLL\Produto();
$lstProd = $bllProd->Select();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Produtos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <h1>Lista de Produtos</h1>
  <table class="table table-striped">
    <tr>
      <th>ID</th>
      <th>Descrição</th>
      <th>Marca</th>
      <th>Preço</th>
      <th>Fornecedor</th>
      <th>Ações</th>
    </tr>

    <?php foreach ($lstProd as $prod) {?>
    <tr>
      <td><?php echo $prod->getId();?></td>
      <td><?php echo $prod->getDescricao();?></td>
      <td><?php echo $prod->getMarca();?></td>
      <td><?php echo $prod->getPreco();?></td>
      <td>
        <a href="insProduto.php?id=<?php echo $prod->getId();?>"class = "btn btn-danger">Editar</a>
        <a href="remProduto.php?id=<?php echo $prod->getId();?>"  class="btn btn-primary">Excluir</a>
      </td>
    </tr>
    <?php }?>
  </table>
  <a href="insProduto.php" class="btn btn-success">adicionar novo produto</a>
</body>
</html>
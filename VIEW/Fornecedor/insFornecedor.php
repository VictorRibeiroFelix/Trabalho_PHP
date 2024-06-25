<?php
// Inclui os arquivos de modelo e BLL
include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Fornecedor.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';

// Verifica se o formulário foi enviado
if (isset($_POST['txtID']) && isset($_POST['txtNome']) && isset($_POST['txtTelef']) && isset($_POST['txtCid']) && isset($_POST['txtMarca'])) {
  // Cria um novo objeto Fornecedor
  $forne = new \MODEL\Fornecedor();
  
  // Atribui os valores do formulário às propriedades do objeto usando os métodos setters
  $forne->setId(intval($_POST['txtID']));
  $forne->setNome($_POST['txtNome']);
  $forne->setTelef(intval($_POST['txtTelef']));
  $forne->setCid($_POST['txtCid']);
  $forne->setMarca($_POST['txtMarca']);

  // Cria um novo objeto BLL para Fornecedor
  $bllForne = new \BLL\Fornecedor();

  // Chama o método Insert da BLL para inserir o fornecedor no banco de dados
  $result = $bllForne->Insert($forne);

  // Verifica se a inserção foi bem-sucedida
  if ($result->errorCode() === '00000') {
    // Redireciona para a página de listagem de fornecedores
    header("location: lstFornecedor.php");
  } else {
    // Exibe a mensagem de erro
    echo $result->errorInfo();
  }
} else {
  // Exibe a mensagem de erro caso o formulário não esteja preenchido
  echo "Preencha todos os campos!";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inserir Fornecedor</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Inserir Fornecedor</h2>
      <form method="post" action="insFornecedor.php">
        <div class="form-group">
          <label for="txtID">ID:</label>
          <input type="text" class="form-control" id="txtID" name="txtID">
        </div>
        <div class="form-group">
          <label for="txtNome">Nome:</label>
          <input type="text" class="form-control" id="txtNome" name="txtNome">
        </div>
        <div class="form-group">
          <label for="txtTelef">Telefone:</label>
          <input type="text" class="form-control" id="txtTelef" name="txtTelef">
        </div>
        <div class="form-group">
          <label for="txtCid">Cidade:</label>
          <input type="text" class="form-control" id="txtCid" name="txtCid">
        </div>
        <div class="form-group">
          <label for="txtMarca">Marca:</label>
          <input type="text" class="form-control" id="txtMarca" name="txtMarca">
        </div>
        <button href="lstFornecedor.php" type="submit" class="btn btn-success">Adicionar</button>
        <a href="lstFornecedor.php" class="btn btn-secondary">Voltar</a> </form>
    </div>
  </body>
</html>
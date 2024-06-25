<?php

include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Cliente.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Cliente.php';


if (isset($_POST['txtID']) && isset($_POST['txtNome']) && isset($_POST['txtCPF']) && isset($_POST['txtTelef']) && isset($_POST['txtEnder']) && isset($_POST['txtCompra'])) {

  $clie = new \MODEL\Cliente();
  

  $clie->setId(intval($_POST['txtID']));
  $clie->setNome($_POST['txtNome']);
  $clie->setCPF($_POST['txtCPF']);
  $clie->setTelef(intval($_POST['txtTelef'])); 
  $clie->setEnder($_POST['txtEnder']);
  $clie->setCompra($_POST['txtCompra']);


  $bllClie = new \BLL\Cliente();
  $result = $bllClie->Insert($clie);


  if ($result->errorCode() === '00000') {

    header("location: lstCliente.php");
  } else {

    echo $result->errorInfo();
  }
} else {

  echo "Preencha todos os campos!";
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Inserir Cliente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2>Inserir Cliente</h2>
      <form method="post" action="insCliente.php">
        <div class="form-group">
          <label for="txtID">ID:</label>
          <input type="text" class="form-control" id="txtID" name="txtID">
        </div>
        <div class="form-group">
          <label for="txtNome">Nome:</label>
          <input type="text" class="form-control" id="txtNome" name="txtNome">
        </div>
        <div class="form-group">
          <label for="txtCPF">CPF:</label>
          <input type="text" class="form-control" id="txtCPF" name="txtCPF">
        </div>
        <div class="form-group">
          <label for="txtTelef">Telefone:</label>
          <input type="text" class="form-control" id="txtTelef" name="txtTelef">
        </div>
        <div class="form-group">
          <label for="txtEnder">Endereço:</label>
          <input type="text" class="form-control" id="txtEnder" name="txtEnder">
        </div>
        <div class="form-group">
          <label for="txtCompra">Compra:</label>
          <input type="text" class="form-control" id="txtCompra" name="txtCompra">
        </div>
        <button type="submit" class="btn btn-success">Adicionar</button>
        <a href="lstCliente.php" class="btn btn-secondary">Voltar</a> 
      </form>
    </div>
  </body>
</html>
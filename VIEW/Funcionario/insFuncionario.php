<?php
    include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Funcionario.php';
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';

  if (isset($_POST['txtID']) && isset($_POST['txtNome']) && isset($_POST['txtCpf']) && isset($_POST['txtTelef']) && isset($_POST['txtEnder'])) {
    $func = new \MODEL\Funcionario();
    $func->setId($_POST['txtID']);
    $func->setNome($_POST['txtNome']);
    $func->setCPF($_POST['txtCpf']);
    $func->setTelef(intval($_POST['txtTelef'])); 
    $func->setEnder($_POST['txtEnder']);

    $bllfunc = new \BLL\Funcionario(); 
    
    $result = $bllfunc->Insert($func);
    
    if ($result->errorCode() === '00000') {
      header("location: lstFuncionario.php");
    }
    else echo $result->errorInfo();
  } else {
    echo "Preencha todos os campos!";
  }

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Adicionar Funcionário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Adicionar Funcionário</h2>
            <form action="insFuncionario.php" method="post">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" id="txtID" name="txtID">
                </div>
                <div class="form-group">
                    <label for="txtNome">Nome:</label>
                    <input type="text" class="form-control" id="txtNome" name="txtNome">
                </div>
                </div>
                <div class="form-group">
                    <label for="txtCpf">CPF:</label>
                    <input type="text" class="form-control" id="txtCpf" name="txtCpf">
                </div>
                <div class="form-group">
                    <label for="txtTelef">Telefone:</label>
                    <input type="text" class="form-control" id="txtTelef" name="txtTelef">
                </div>
                <div class="form-group">
                  <label for="txtEnder">Endereço:</label>
                  <input type="text" class="form-control" id="txtEnder" name="txtEnder">
                </div>
                <button type="submit" class="btn btn-success">Adicionar</button>
                <a href="lstFuncionario.php" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </body>
</html>
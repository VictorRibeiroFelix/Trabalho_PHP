<?php
  include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Funcionario.php';
  include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';
  $id = $_GET['id']; 

  $bllFunc = new BLL\Funcionario();
  $func = $bllFunc->SelectByID($id);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>formulario Funcionario</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.
    0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min
    .js"></script>
    </head>
    <body>
      <div class="container">
        <h2>formulario Funcionario</h2>
        <form action="edtFuncionario.php" method="post">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome"
            value="<?php echo $func->getNome();?>">
            </div>
            <div class="form-group">
              <label for="cpf">CPF:</label>
              <input type="text" class="form-control" id="cpf" name="cpf"
              value="<?php echo $func->getCpf();?>">
              </div>
              <div class="form-group">
                <label for="telef">Telefone:</label>
                <input type="text" class="form-control" id="telef" name="telef"
                value="<?php echo $func->getTelef();?>">
                </div>
                <div class="form-group">
                  <label for="ender">Endereço:</label>
                  <input type="text" class="form-control" id="ender" name="ender"
                  value="<?php echo $func->getEnder();?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                  <a href="lstFuncionario.php" class="btn btn-secondary">Voltar</a>
                  </form>
                </div>
              </body>
</html>

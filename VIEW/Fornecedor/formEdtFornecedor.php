<?php 
  include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Fornecedor.php';
  include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';
  $id = $_GET['id']; 
  
  $bllForn= new BLL\Fornecedor();
  $forn = $bllForn->SelectByID($id);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>formulario Fornecedor</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.
    0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min
    .js"></script>
    </head>
    <body>
      <div class="container">
        <h2>formulario Fornecedor</h2>
        <form action="edtFornecedor.php" method="post">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome"
            value="<?php echo $forn->getNome();?>">
            </div>
            <div class="form-group">
              <label for="Cid">Cidade:</label>
              <input type="text" class="form-control" id="Cid" name="Cid"
              value="<?php echo $forn->getCid();?>">
              </div>
              <div class="form-group">
                <label for="telef">Telefone:</label>
                <input type="text" class="form-control" id="telef" name="telef"
                value="<?php echo $forn->getTelef();?>">
                </div>
                <div class="form-group">
                  <label for="marca">Marca:</label>
                  <input type="text" class="form-control" id="marca" name="marca"
                  value="<?php echo $forn->getMarca();?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                  <a href="index.php" class="btn btn-secondary">Voltar</a>
                  </form>
                </div>
              </body>
</html>

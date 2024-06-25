<?php
  include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Cliente.php';
  include_once 'C:\xampp\htdocs\Trabalho2\BLL\Cliente.php';
  $id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

  $bllClie = new BLL\Cliente();
  $clie = $bllClie->SelectByID($id);
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>formulario Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.
    0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min
    .js"></script>
    </head>
    <body>
      <div class="container">
        <h2>formulario Cliente</h2>
        <form action="edtCliente.php" method="post">
          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome"
            value="<?php echo $clie->getNome();?>">
            </div>
            <div class="form-group">
              <label for="cpf">CPF:</label>
              <input type="text" class="form-control" id="cpf" name="cpf"
              value="<?php echo $clie->getCpf();?>">
              </div>
              <div class="form-group">
                <label for="telef">Telefone:</label>
                <input type="text" class="form-control" id="telef" name="telef"
                value="<?php echo $clie->getTelef();?>">
                </div>
                <div class="form-group">
                  <label for="ender">Endereço:</label>
                  <input type="text" class="form-control" id="ender" name="ender"
                  value="<?php echo $clie->getEnder();?>">
                  </div>
                  <div class="form-group">
                  <label for="compra">Compra:</label>
                  <input type="text" class="form-control" id="compra" name="compra"
                  value="<?php echo $clie->getCompra();?>">
                  </div>
                  <input type="hidden" name="id" value="<?php echo $id;?>">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                  <a href="lstCliente.php" class="btn btn-secondary">Voltar</a>
                  </form>
                </div>
              </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bllClie = new BLL\Cliente();
  $clie = new MODEL\Cliente();

  // Atribui os valores dos campos do formulário às propriedades do objeto Cliente
  $clie->setId($_POST['id']);
  $clie->setNome($_POST['nome']);
  $clie->setCPF($_POST['cpf']);
  $clie->setTelef($_POST['telef']);
  $clie->setEnder($_POST['ender']);
  $clie->setCompra($_POST['compra']);

  // Chama o método Update da BLL para atualizar o cliente no banco de dados
  $result = $bllClie->Update($clie);

  // Verifica se a atualização foi bem-sucedida
  if ($result) {
    // Redireciona para a página de listagem de clientes após a atualização
    header("Location: lstCliente.php");
    exit; // Pare a execução do script
  } else {
    echo "Erro ao editar cliente.";
  }
}
?>
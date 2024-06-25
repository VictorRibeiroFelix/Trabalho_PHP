<?php 

include_once 'C:\xampp\htdocs\Trabalho2\BLL\Cliente.php';

use BLL\Cliente;

$bllClie = new \BLL\Cliente();
$lstClie = $bllClie->Select();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    <h1>Lista de Clientes</h1>
    <table class="table table-striped">
      <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
      </tr>
      
      <?php foreach ($lstClie as $clie) {?>
      <tr>
        <td><?php echo $clie->getId();?></td>
        <td><?php echo $clie->getNome();?></td>
        <td><?php echo $clie->getCpf();?></td>
        <td><?php echo $clie->getTelef();?></td>
        <td><?php echo $clie->getEnder();?></td>
        <td>
          <a href="formEdtcliente.php?id=<?php echo $clie->getId();?>" class="btn btn-danger">Editar</a>
          <a href="formDetCliente.php?id=<?php echo $clie->getId();?>" class="btn btn-primary">Excluir</a>
        </td>
      </tr>
      <?php }?>
    </table>
    <a href="insCliente.php" class="btn btn-success">Adicionar novo cliente</a>
  </body>
</html>
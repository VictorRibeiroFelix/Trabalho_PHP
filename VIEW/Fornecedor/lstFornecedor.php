<?php 

include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';

use BLL\Fornecedor;

$bllForne = new \BLL\Fornecedor();
$lstForne= $bllForne->Select();

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Lista de Fornecedores</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <h1>Lista de Fornecedores</h1>
        <table class="table table-striped">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Cidade</th>
                <th>Marca</th>
            </tr>
            <?php foreach ($lstForne as $forne) { ?>

            <tr>
                <td><?php echo $forne->getId(); ?></td>
                <td><?php echo $forne->getnome(); ?></td>
                <td><?php echo $forne->getTelef(); ?></td>
                <td><?php echo $forne->getCid(); ?></td>
                <td><?php echo $forne->getMarca(); ?></td>
                <td>
                    <a href="formDetFornecedor.php?id=<?php echo $forne->getId(); ?>" class="btn btn-danger">Deletar</a>
                    <a href="edtFornecedor.php?id=<?php echo $forne->getID(); ?>" class="btn btn-primary">Editar</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <a href="insFornecedor.php" class="btn btn-success">Adicionar novo Fornecedor</a>
    </body>
</html>
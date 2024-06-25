<?php 

include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';

use BLL\Funcionario;

$bllFunc = new \BLL\Funcionario();
$lstFunc = $bllFunc->Select();

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Listar Funcionários</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container">
            <h2>Lista de Funcionários</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>telefone</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <body>
                    <?php foreach ($lstFunc as $func) { ?>
                    <tr>
                        <td><?php echo $func->getId(); ?></td>
                        <td><?php echo $func->getNome(); ?></td>
                        <td><?php echo $func->getCpf(); ?></td>
                        <td><?php echo $func->getTelef(); ?></td>
                        <td><?php echo $func->getEnder(); ?></td>
                        <td>
                            <a href="formDetFuncionario.php?id=<?php echo $func->getId(); ?>" class="btn btn-danger">Deletar</a>
                            <a href="formEdtFuncionario.php?id=<?php echo $func->getId(); ?>" class="btn btn-primary">Editar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </body>
            </table>
            <a href="inserirFuncionario.php" class="btn btn-success">Adicionar Novo Funcionário</a>
        </div>
    </body>
</html>
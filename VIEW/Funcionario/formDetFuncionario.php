<?php

include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Funcionario.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';

// Obtenha o ID do funcionário a ser excluído da URL
$id = isset($_GET['id']) ? $_GET['id'] : null; 

// Crie uma instância da BLL
$bllFunc = new BLL\Funcionario();

// Obtenha os dados do funcionário a ser excluído (opcional, mas pode ser útil)
$func = $bllFunc->SelectByID($id); // Esta linha é opcional

// Verifique se o ID é válido antes de prosseguir
if ($id !== null) {

    // Se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Chame o método Delete da BLL para excluir o funcionário
        $result = $bllFunc->Delete(intval($id)); // Converta $id para inteiro

        if ($result) {
            // Redirecione para lstFuncionario.php após a exclusão
            header("Location: lstFuncionario.php");
            exit; // Pare a execução do script
        } else {
            echo "Erro ao excluir funcionário.";
        }
    } else {
        // Exiba o formulário (se necessário)
        // ...
    }
} else {
    echo "ID do funcionário não encontrado.";
}

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Deletar Funcionário</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h2>Deletar Funcionário</h2>
            <form action="remFuncionario.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $func->getNome();?>" readonly>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $func->getCpf();?>" readonly>
                </div>
                <div class="form-group">
                    <label for="telef">telefone:</label>
                    <input type="telef" class="form-control" id="telgetTelef" name="telef" value="<?php echo $func->getTelef();?>" readonly>
                </div>
                <div class="form-group">
                    <label for="ender">endereco:</label>
                    <input type="text" class="form-control" id="ender" name="ender" value="<?php echo $func->getEnder();?>" readonly>
                </div>
                <a type="submit" class="btn btn-danger" href="remFuncionario.php?id=<?php echo $id; ?>">deletar</a> 
                <a href="lstFuncionarios.php" class="btn btn-secondary">Voltar</a>
            </form>
        </div>
    </body>
</html>


?>
<?php

include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Cliente.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Cliente.php';

// Obtenha o ID do cliente a ser excluído da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Crie uma instância da BLL
$bllClie = new BLL\Cliente();

// Verifique se o ID é válido antes de prosseguir
if ($id !== null) {

    // Obtenha os dados do cliente a ser excluído (opcional, mas pode ser útil)
    $clie = $bllClie->SelectByID($id); 

    // Se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Chame o método Delete da BLL para excluir o cliente
        $result = $bllClie->Delete(intval($id));

        if ($result) {
            // Redirecione para lstCliente.php após a exclusão
            header("Location: lstCliente.php");
            exit; // Pare a execução do script
        } else {
            echo "Erro ao excluir cliente.";
        }
    } else {
        // Exiba o formulário (se necessário)
        ?>

        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Formulario delet Cliente</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </head>
        <body>
            <h1>Formulario delet Cliente</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $clie ? $clie->getNome() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $clie ? $clie->getCpf() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $clie ? $clie->getTelef() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $clie ? $clie->getEnder() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="compra">Compra:</label>
                    <input type="text" class="form-control" id="compra" name="compra" value="<?php echo $clie ? $clie->getCompra() : ''; ?>" readonly><br><br>
                </div>
                <button type="submit" class="btn btn-danger">Deletar</button>
                <a href="lstCliente.php" class="btn btn-secondary">Voltar</a>
            </form>
        </body>
        </html>

        <?php
    }
} else {
    echo "ID do cliente não encontrado.";
}

?>
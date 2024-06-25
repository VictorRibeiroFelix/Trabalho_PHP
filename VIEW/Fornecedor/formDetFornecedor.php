<?php

include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Fornecedor.php';
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';

// Obtenha o ID do fornecedor a ser excluído da URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Crie uma instância da BLL
$bllForne = new BLL\Fornecedor();

// Verifique se o ID é válido antes de prosseguir
if ($id !== null) {

    // Obtenha os dados do fornecedor a ser excluído (opcional, mas pode ser útil)
    $forne = $bllForne->SelectByID($id); 

    // Se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Chame o método Delete da BLL para excluir o fornecedor
        $result = $bllForne->Delete(intval($id));

        if ($result) {
            // Redirecione para lstFornecedor.php após a exclusão
            header("Location: lstFornecedor.php");
            exit; // Pare a execução do script
        } else {
            echo "Erro ao excluir fornecedor.";
        }
    } else {
        // Exiba o formulário (se necessário)
        ?>

        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">

            <title>Formulario delet Fornecedor</title>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        </head>
        <body>
            <h1>Formulario delet Fornecedor</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $forne ? $forne->getNome() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="cidade">Cidade:</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $forne ? $forne->getCid() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $forne ? $forne->getTelef() : ''; ?>" readonly><br><br>
                </div>
                <div class="form-group">
                    <label for="marca">Marca:</label>
                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $forne ? $forne->getMarca() : ''; ?>" readonly><br><br>
                </div>
                <button type="submit" class="btn btn-danger">Deletar</button>
                <a href="lstFornecedor.php" class="btn btn-secondary">Voltar</a>
            </form>
        </body>
        </html>

        <?php
    }
} else {
    echo "ID do fornecedor não encontrado.";
}

?>
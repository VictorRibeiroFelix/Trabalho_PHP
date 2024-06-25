<?php 
    namespace VIEW\Fornecedor;
    include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Fornecedor.php';
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php';

    // Obtenha o ID do fornecedor da URL
    $id = isset($_GET['id']) ? $_GET['id'] : null; 

    // Crie uma instância da BLL
    $bllFornecedor = new \BLL\Fornecedor(); 

    // Verifique se $id é válido
    if ($id !== null) {
        // Obtenha os dados do fornecedor usando o ID
        $fornecedor = $bllFornecedor->SelectByID(intval($id)); 
    } else {
        echo "ID do fornecedor não encontrado.";
        exit; // Pare a execução do script
    }

    // Verifique se o fornecedor foi encontrado
    if ($fornecedor) {
        // Se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Atualize os dados do fornecedor com os valores do formulário
            $fornecedor->setNome($_POST["txtNome"]);
            $fornecedor->setCid($_POST["txtCid"]);
            $fornecedor->setTelef($_POST["txtTelef"]);
            $fornecedor->setMarca($_POST["txtMarca"]);

            // Chame o método Update da BLL para atualizar o fornecedor
            $result = $bllFornecedor->Update($fornecedor); 

            // Redirecione para lstFornecedor.php após a atualização
            if ($result) {
                header("Location: lstFornecedor.php");
                exit; 
            } else {
                echo "Erro ao atualizar fornecedor.";
            }
        } 
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <title>Alterar Fornecedor</title>
        </head>
        <body>
            <h1>Alterar Fornecedor</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="post">
                <label for="txtNome">Nome:</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $fornecedor->getNome(); ?>"><br><br>
                <label for="txtCid">Cidade:</label>
                <input type="text" class="form-control" id="txtCid" name="txtCid" value="<?php echo $fornecedor->getCid(); ?>"><br><br>
                <label for="txtTelef">Telefone:</label>
                <input type="text" class="form-control" id="txtTelef" name="txtTelef" value="<?php echo $fornecedor->getTelef(); ?>"><br><br>
                <label for="txtMarca">Marca:</label>
                <input type="text" class="form-control" id="txtMarca" name="txtMarca" value="<?php echo $fornecedor->getMarca(); ?>"><br><br>
                <input type="submit" value="Alterar">
            </form>
        </body>
    </html>

    <?php
    } else {
        echo "Fornecedor não encontrado.";
    }
    ?>
<?php 
    namespace VIEW\Cliente;
    include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Funcionario.php';
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';

    // Obtenha o ID do funcionário da URL
    $id = isset($_GET['id']) ? $_GET['id'] : null; 

    // Crie uma instância da BLL
    $bllFunc = new \BLL\Funcionario(); 

    // Verifique se $id é válido
    if ($id !== null) {
        // Obtenha os dados do funcionário usando o ID
        $func = $bllFunc->SelectByID(intval($id)); 
    } else {
        echo "ID do funcionário não encontrado.";
        exit; // Pare a execução do script
    }

    // Verifique se o funcionário foi encontrado
    if ($func) {
        // Se o formulário foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Atualize os dados do funcionário com os valores do formulário
            $func->setNome($_POST["txtNome"]);
            $func->setCPF($_POST["txtCPF"]);
            $func->setTelef($_POST["txtTelef"]);
            $func->setEnder($_POST["txtEnder"]);

            // Chame o método Update da BLL para atualizar o funcionário
            $result = $bllFunc->Update($func); 

            // Redirecione para lstFuncionario.php após a atualização
            if ($result) {
                header("Location: lstFuncionario.php");
                exit; 
            } else {
                echo "Erro ao atualizar funcionário.";
            }
        } 
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <title>Alterar Funcionário</title>
        </head>
        <body>
            <h1>Alterar Funcionário</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="post">
                <label for="txtNome">Nome:</label>
                <input type="text" id="txtNome" name="txtNome" value="<?php echo $func->getNome(); ?>"><br><br>
                <label for="txtCPF">CPF:</label>
                <input type="text" id="txtCPF" name="txtCPF" value="<?php echo $func->getCpf(); ?>"><br><br>
                <label for="txtTelef">Telefone:</label>
                <input type="text" id="txtTelef" name="txtTelef" value="<?php echo $func->getTelef(); ?>"><br><br>
                <label for="txtEnder">Endereço:</label>
                <input type="text" id="txtEnder" name="txtEnder" value="<?php echo $func->getEnder(); ?>"><br><br>
                <input type="submit" value="Alterar">
            </form>
        </body>
    </html>

    <?php
    } else {
        echo "Funcionário não encontrado.";
    }
    ?>
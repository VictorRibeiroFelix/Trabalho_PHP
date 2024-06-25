<?php 
    namespace VIEW\Cliente;
    include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Cliente.php';
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Cliente.php';

    $id = isset($_GET['id']) ? $_GET['id'] : null; 


    $bllCliente = new \BLL\Cliente(); 


    if ($id !== null && $id > 0) { 
      $cliente = $bllCliente->SelectByID($id); 
  } else {
      echo "ID do cliente inválido.";
      exit; 
  }


    if ($cliente) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $cliente->setNome($_POST["txtNome"]);
            $cliente->setCPF($_POST["txtCPF"]);
            $cliente->setTelef($_POST["txtTelef"]);
            $cliente->setEnder($_POST["txtEnder"]);
            $cliente->setCompra($_POST["txtCompra"]);


            $result = $bllCliente->Update($cliente); 


            if ($result) {
                header("Location: lstCliente.php");
                exit; 
            } else {
                echo "Erro ao atualizar cliente.";
            }
        } 
    ?>

    <!DOCTYPE html>
    <html lang="pt-BR">
    <html>
        <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
            <title>Alterar Cliente</title>
        </head>
        <body>
            <h1>Alterar Cliente</h1>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="post">
                <label for="txtNome">Nome:</label>
                <input type="text" class="form-control" id="txtNome" name="txtNome" value="<?php echo $cliente->getNome(); ?>"><br><br>
                <label for="txtCPF">CPF:</label>
                <input type="text" class="form-control" id="txtCPF" name="txtCPF" value="<?php echo $cliente->getCpf(); ?>"><br><br>
                <label for="txtTelef">Telefone:</label>
                <input type="text" class="form-control" id="txtTelef" name="txtTelef" value="<?php echo $cliente->getTelef(); ?>"><br><br>
                <label for="txtEnder">Endereço:</label>
                <input type="text" class="form-control" id="txtEnder" name="txtEnder" value="<?php echo $cliente->getEnder(); ?>"><br><br>
                <label for="txtCompra">Compra:</label>
                <input type="text" class="form-control" id="txtCompra" name="txtCompra" value="<?php echo $cliente->getCompra(); ?>"><br><br>
                <input type="submit" value="Alterar">
            </form>
        </body>
    </html>

    <?php
    } else {
        echo "Cliente não encontrado.";
    }
    ?>
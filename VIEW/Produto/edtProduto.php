<?php 
    namespace VIEW\Produto;
    include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Produto.php';
    include_once 'C:\xampp\htdocs\Trabalho2\BLL\Produto.php';

    $Produto= new \MODEL\Produto();

    $Produto->setId($_POST['txtID']);
    $Produto->setDescricao($_POST['txtDescricao']);
    $Produto->setMarca($_POST['txtMarca']);
    $Produto->setPreco($_POST['txtPreco']);
   

    $bllProduto= new \BLL\Produto(); 
    $result =  $bllProduto->Update($Produto);  

    header("location: lstProduto.php");


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Editar Produto</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Editar Produto</h1>
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <div class="form-group">
                    <label for="txtID">ID:</label>
                    <input type="text" class="form-control" id="txtID" name="txtID" value="<?php echo $Produto->getId();?>" readonly>
                </div>
                <div class="form-group">
                    <label for="txtDescricao">Descrição:</label>
                    <input type="text" class="form-control" id="txtDescricao" name="txtDescricao" value="<?php echo $Produto->getDescricao();?>">
                </div>
                <div class="form-group">
                    <label for="txtMarca">Marca:</label>
                    <input type="text" class="form-control" id="txtMarca" name="txtMarca" value="<?php echo $Produto->getMarca();?>">
                </div>
                <div class="form-group">
                    <label for="txtPreco">Preço:</label>
                    <input type="number" class="form-control" id="txtPreco" name="txtPreco" value="<?php echo $Produto->getPreco();?>">
                </div>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </form>
        </div>
    </body>
</html>

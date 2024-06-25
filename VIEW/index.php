<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Gestão</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Sistema de Gestão</h1>

        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#fornecedor-tab">Fornecedor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#funcionario-tab">Funcionário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#produto-tab">Produto</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#cliente-tab">Cliente</a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane fade show active" id="fornecedor-tab">
                <h2>Fornecedor</h2>
                <ul>
                    <li><a href="Fornecedor/lstFornecedor.php">Listar Fornecedores</a></li>
                    <li><a href="Fornecedor/insFornecedor.php">Adicionar Fornecedor</a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="funcionario-tab">
                <h2>Funcionário</h2>
                <ul>
                    <li><a href="Funcionario/lstFuncionario.php">Listar Funcionários</a></li>
                    <li><a href="Funcionario/insFuncionario.php">Adicionar Funcionário</a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="produto-tab">
                <h2>Produto</h2>
                <ul>
                    <li><a href="Produto/lstProduto.php">Listar Produtos</a></li>
                    <li><a href="Produto/insProduto.php">Adicionar Produto</a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="cliente-tab">
                <h2>Cliente</h2>
                <ul>
                    <li><a href="Cliente/lstCliente.php">Listar Clientes</a></li>
                    <li><a href="Cliente/insCliente.php">Adicionar Cliente</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
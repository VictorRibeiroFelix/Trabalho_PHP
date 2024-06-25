<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inserir Cliente</title>
  <style>
    /* Estilos CSS */
    body {
      font-family: Arial, sans-serif;
    }
    #formCliente {
      max-width: 300px;
      margin: 40px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 10px;
    }
    input[type="text"], input[type="email"], input[type="tel"] {
      width: 100%;
      height: 30px;
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ccc;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
</head>
<body>
  <h1>Inserir Cliente</h1>
  <form id="formCliente" method="post" action="insCliente.php">
    <h2>Inserir Cliente</h2>
    <label for="txtNome">Nome do Cliente:</label>
    <input type="text" id="txtNome" name="txtNome" required>
    <br><br>
    <label for="txtCPF">CPF do Cliente:</label>
    <input type="CPF" id="txtCPF" name="txtCPF" required>
    <br><br>
    <label for="txtTelef">Telefone do Cliente:</label>
    <input type="tel" id="txttelef" name="txttelef" required>
    <br><br>
    <label for="txtEndereco">Endereço cliente</label>
    <input type="text" id="txtEndereco" name="txtEndereco" required>
    <br><br>
    <label for="txtCompra">Compra cliente</label>
    <input type="text" id="txtCompra" name="txtCompra" required>
    <br><br>
    <input type="submit" value="Inserir Cliente">
  </form>
</body>
</html>
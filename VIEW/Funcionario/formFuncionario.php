<?php include_once 'C:\xampp\htdocs\Trabalho2\BLL\Funcionario.php';?>

<form id="formFuncionario" method="post">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required><br><br>
  
  <label for="cpf">CPF:</label>
  <input type="text" id="cpf" name="cpf" required><br><br>
  
  <label for="Telef">Telefone:</label>
  <input type="number" id="telef" name="telef" required><br><br>
  
  <label for="Ender">Endereco:</label>
  <input type="text" id="ender" name="ender" required><br><br>
  
  <!-- Botões de ação -->
  <input type="submit" value="Cadastrar">
  <input type="reset" value="Limpar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bllFuncionario = new BLL\Funcionario();
  $Funcionario = new MODEL\Funcionario();
  
  
  $Funcionario->setNome($_POST["nome"]);
  $Funcionario->setCPF($_POST["CPF"]);
  $Funcionario->setTelef($_POST["Telefone"]);
  $Funcionario->setEnder($_POST["Endereco"]);
  
  $bllFuncionario->Insert($Funcionario);
  
  echo "Funcionário cadastrado com sucesso!";
}
?>
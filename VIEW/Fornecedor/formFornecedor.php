<?php
include_once 'C:\xampp\htdocs\Trabalho2\BLL\Fornecedor.php'; // Inclui a BLL de Fornecedor

?>

<form id="formFornecedor" method="post">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required><br><br>

  <label for="cid">Cidade:</label>
  <input type="text" id="cid" name="cid" required><br><br>

  <label for="telef">Telefone:</label>
  <input type="number" id="telef" name="telef" required><br><br>

  <label for="marca">Marca:</label>
  <input type="text" id="marca" name="marca" required><br><br>

  <!-- Botões de ação -->
  <input type="submit" value="Cadastrar">
  <input type="reset" value="Limpar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $bllFornecedor = new BLL\Fornecedor(); // Cria uma instância da BLL
  $fornecedor = new MODEL\Fornecedor(); // Cria uma instância da MODEL
  
  $Forne->setNome($_POST["nome"]);
  $Forne->setCid($_POST["cid"]);
  $Forne->setTelef(intval($_POST["telef"])); // Converte o telefone para inteiro
  $Forne->setMarca($_POST["marca"]);

  // Tenta inserir o fornecedor usando a BLL
  $result = $bllForne->Insert($Forne);

  if ($result === true) {
    echo "Fornecedor cadastrado com sucesso!";
  } else {
    echo "Erro ao cadastrar fornecedor.";
  }
}
?>
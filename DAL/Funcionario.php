<?php
namespace DAL;

include_once 'C:\xampp\htdocs\Trabalho2\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Funcionario.php';

class Funcionario{
    public function Select(){
        $sql = "SELECT * FROM funcionario;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar(); // Desconecte aqui

        $lstFunc = []; // Inicialize o array
        foreach($registros as $linha){
            $func = new \MODEL\Funcionario();

            $func->setId($linha['Id']);
            $func->setNome($linha['Nome']);
            $func->setCPF($linha['CPF']);
            $func->setTelef($linha['Telefone']);
            $func->setEnder($linha['Endereco']);

            $lstFunc[] = $func;
        }
        return $lstFunc;
    }

    public function SelectByID(int $id){
        $sql = "SELECT * FROM funcionario WHERE id = :id;"; // Corrigido: SELECT e :id
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([':id' => $id]); // Utilize bindValue

       if ($linha = $query->fetch(\PDO::FETCH_ASSOC)) {
         $func = new \MODEL\Funcionario();

        $func->setId($linha['Id']);
        $func->setNome($linha['Nome']);
        $func->setCPF($linha['CPF']);
        $func->setTelef($linha['Telefone']);
        $func->setEnder($linha['Endereco']);

        return $func;
      } else {
            return null;
        }
        Conexao::desconectar();
    }

    public function Insert(\MODEL\Funcionario $funcionario){
        $sql = "INSERT INTO funcionario (nome, cpf, telefone, endereco) VALUES (:nome, :cpf, :telefone, :endereco);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', $funcionario->getNome());
        $query->bindValue(':cpf', $funcionario->getCPF());
        $query->bindValue(':telefone', $funcionario->getTelef());
        $query->bindValue(':endereco', $funcionario->getEnder());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Update(\MODEL\Funcionario $funcionario){
        $sql = "UPDATE funcionario SET nome = :nome, cpf = :cpf, telefone = :telefone, endereco = :endereco WHERE id = :id;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', $funcionario->getNome());
        $query->bindValue(':cpf', $funcionario->getCPF());
        $query->bindValue(':telefone', $funcionario->getTelef());
        $query->bindValue(':endereco', $funcionario->getEnder());
        $query->bindValue(':id', $funcionario->getID());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Delete(int $id){
        $sql = "DELETE FROM funcionario WHERE id = :id;"; // Use :id

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }
}

?>
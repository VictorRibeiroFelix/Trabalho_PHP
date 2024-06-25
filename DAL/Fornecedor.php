<?php
namespace DAL;

include_once 'C:\xampp\htdocs\Trabalho2\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Fornecedor.php';

class Fornecedor{
    public function Select(){
        $sql = "SELECT * FROM fornecedor;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar(); 

        $lstForne = []; // Inicialize o array
        foreach($registros as $linha){
            $forne = new \MODEL\Fornecedor();

            $forne->setId($linha['Id']);
            $forne->setNome($linha['Nome']);
            $forne->setTelef($linha['Telefone']);
            $forne->setCid($linha['Cidade']);
            $forne->setMarca($linha['Marca']);

            $lstForne[] = $forne;
        }
        return $lstForne;
    }

    public function SelectByID(int $id){
        $sql = "SELECT * FROM fornecedor WHERE id = :id;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([':id' => $id]); 
    
        if ($linha = $query->fetch(\PDO::FETCH_ASSOC)) { // Use PDO::FETCH_ASSOC diretamente
            $forn = new \MODEL\Fornecedor();
    
            $forn->setId($linha['Id']);
            $forn->setNome($linha['Nome']);
            $forn->setTelef($linha['Telefone']);
            $forn->setCid($linha['Cidade']);
            $forn->setMarca($linha['Marca']);
    
            return $forn;
        } else {
            return null;
        }
    
        Conexao::desconectar();
    }

    public function Insert(\MODEL\Fornecedor $forn){
        $sql = "INSERT INTO fornecedor (nome, marca, telefone, cidade) VALUES (:nome, :marca, :telefone, :cidade);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', $forn->getNome());
        $query->bindValue(':marca', $forn->getMarca());
        $query->bindValue(':telefone', $forn->getTelef());
        $query->bindValue(':cidade', $forn->getCid());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Update(\MODEL\Fornecedor $forn){
        $sql = "UPDATE fornecedor SET nome = :nome, telefone = :telefone, cidade = :cidade, marca = :marca WHERE id = :id;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', $forn->getNome());
        $query->bindValue(':telefone', $forn->getTelef());
        $query->bindValue(':cidade', $forn->getCid());
        $query->bindValue(':marca', $forn->getMarca());
        $query->bindValue(':id', $forn->getID());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Delete(int $id){
        $sql = "DELETE FROM fornecedor WHERE id = :id;"; // Use :id

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }
}

?>
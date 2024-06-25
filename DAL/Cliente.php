<?php
namespace DAL;

include_once 'C:\xampp\htdocs\Trabalho2\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Cliente.php';

class Cliente {
    public function Select() {
        $sql = "SELECT * FROM cliente;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar(); // Desconecte aqui

        $lstClie = []; // Inicialize o array
        foreach ($registros as $linha) {
            $clie = new \MODEL\Cliente();

            $clie->setId($linha['Id']);
            $clie->setNome($linha['Nome']);
            $clie->setCPF($linha['CPF']);
            $clie->setTelef($linha['Telefone']);
            $clie->setEnder($linha['Endereco']);
            $clie->setCompra($linha['Compra']);

            $lstClie[] = $clie;
        }
        return $lstClie;
    }

    public function SelectByID(int $id) {
        $sql = "SELECT * FROM cliente WHERE id = :id;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([':id' => $id]); 

        if ($linha = $query->fetch(\PDO::FETCH_ASSOC)) { // Use PDO::FETCH_ASSOC diretamente
            $clie = new \MODEL\Cliente();

            $clie->setId($linha['Id']);
            $clie->setNome($linha['Nome']);
            $clie->setCPF($linha['CPF']);
            $clie->setTelef($linha['Telefone']);
            $clie->setEnder($linha['Endereco']);
            $clie->setCompra($linha['Compra']);

            return $clie;
        } else {
            return null;
        }

        Conexao::desconectar();
    }

    public function Insert(\MODEL\Cliente $clie) {
        $sql = "INSERT INTO cliente (nome, cpf, telefone, endereco, compra) VALUES (:nome, :cpf, :telefone, :endereco, :compra);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', $clie->getNome());
        $query->bindValue(':cpf', $clie->getCpf());
        $query->bindValue(':telefone', $clie->getTelef());
        $query->bindValue(':endereco', $clie->getEnder());
        $query->bindValue(':compra', $clie->getCompra());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Update(\MODEL\Cliente $clie) {
        $sql = "UPDATE cliente SET nome = :nome, telefone = :telefone, endereco = :endereco, compra = :compra WHERE id = :id;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':nome', $clie->getNome());
        $query->bindValue(':telefone', $clie->getTelef());
        $query->bindValue(':endereco', $clie->getEnder());
        $query->bindValue(':compra', $clie->getCompra());
        $query->bindValue(':id', $clie->getId());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Delete(int $id) {
        $sql = "DELETE FROM cliente WHERE id = :id;"; // Use :id

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }
}

?>
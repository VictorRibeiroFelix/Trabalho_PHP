<?php
namespace DAL;

include_once 'C:\xampp\htdocs\Trabalho2\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho2\MODEL\Produto.php';

class Produto{
    public function Select(){
        $sql = "SELECT * from produto;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        $lstProd = [];
        foreach($registros as $linha){
            $prod = new \MODEL\Produto();

            $prod->setId($linha['Id']);
            $prod->setMarca($linha['Marca']);
            $prod->setDescricao($linha['Descricao']);
            $prod->setPreco($linha['Preco']);

            $lstProd[] = $prod;
        }
        return $lstProd;
    }

    public function SelectByID(int $id){
        $sql = "SELECT * from produto WHERE id=:id;";
        $con = Conexao::conectar(); 
        $query = $con->prepare($sql);
        $query->execute ([':id' =>$id]);

       if ($linha = $query->fetch(\PDO::FETCH_ASSOC)){
        $prod = new \MODEL\Produto();

        $prod->setId($linha['Id']);
        $prod->setMarca($linha['Marca']);
        $prod->setDescricao($linha['Descricao']);
        $prod->setPreco($linha['Preco']);

        return $prod;
        } else {
            return null;
        }
            Conexao::desconectar();
    }

    public function Insert(\MODEL\Produto $prod) {
        $sql = "INSERT INTO produto (id, descricao, marca, preco, fornecedorId) 
            VALUES (:id, :descricao, :marca, :preco, :fornecedorId);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':descricao', $prod->getDescricao());
        $query->bindValue(':marca', $prod->getMarca());
        $query->bindValue(':preco', $prod->getPreco());
        $query->bindValue(':fornecedorId', $prod->getFornecedorId());
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }

    public function Update(\MODEL\Produto $prod){
        $sql = "UPDATE produto SET marca = :marca, descricao = :descricao, preco = :preco WHERE id = :id;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':marca', $prod->getMarca());
        $query->bindValue(':descricao', $prod->getDescricao());
        $query->bindValue(':preco', $prod->getPreco());
        $query->bindValue(':id', $prod->getId());

        $result = $query->execute();
        Conexao::desconectar();

        return $result; 

    }

    public function Delete(int $id){
        $sql = "DELETE FROM produto WHERE id = :id;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->bindValue(':id', $id);
        $result = $query->execute();
        Conexao::desconectar();

        return $result; 
    }
}

?>
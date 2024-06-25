<?php
namespace MODEL;

class Produto{
    private ?int  $id;
    private ?string $marca;
    private ?string $descricao;
    private ?float $preco;
    private ?int $fornecedorId;

    public function __construct() {
        $this->marca = "";
        $this->descricao = "";
        $this->preco = "0";
        $this->fornecedorId = "0";
    }

    public function getID(){
        return $this->id;
    }
    public function setId(int $id){
        $this->id = $id;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca(string $marca){
        $this->marca = $marca;
    }
    public function getDescricao(){
        return $this->descricao;       
    }
    public function setDescricao(string $descricao){
        $this->descricao = $descricao; 
    }
    public function getPreco(){
        return $this->preco;
    }
    public function setPreco(float $preco){
        $this->preco = $preco;
    }
    public function getFornecedorId() {
        return $this->fornecedorId;
      }
    public function setFornecedorId($fornecedorId) {
        $this->fornecedorId = $fornecedorId;
      }

}


?>
<?php
namespace MODEL;

class Fornecedor{
    private ?int  $id;
    private ?string $nome;
    private ?string $marca;
    private ?string $telefone;
    private ?string $cidade;

    public function __construct() {
        $this->nome = "";
        $this->telefone = "0";
        $this->cidade = "";
        $this->marca = "";
    }

    public function getID(){
        return $this->id;
    }

    public function setId(int $id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function getTelef(){
        return $this->telefone;
    }

    public function setTelef(string $telefone){
        $this->telefone = $telefone;
    }

    public function getCid(){
        return $this->cidade;
    }

    public function setCid(string $cidade){
        $this->cidade = $cidade;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca(string $marca){
        $this->marca = $marca;
    }


}


?>
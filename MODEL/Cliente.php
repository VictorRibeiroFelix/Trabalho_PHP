<?php
namespace MODEL;

class Cliente{
    private ?int  $id;
    private ?string $nome;
    private ?string $cpf;
    private ?int $telefone;
    private ?string $endereco;
    private ?string $compra;

    public function __construct() {
        $this->nome = "";
        $this->cpf = "";
        $this->telefone = "0";
        $this->endereco = "";
        $this->compra = "";
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

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF(string $cpf){
        $this->cpf = $cpf;
    }

    public function getTelef(){
        return $this->telefone;
    }

    public function setTelef(int $telefone){
        $this->telefone = $telefone;
    }

    public function getEnder(){
        return $this->endereco;
    }

    public function setEnder(string $endereco){
        $this->endereco = $endereco;
    }

    public function getCompra()
    {
        return $this->compra;
    }

    public function setCompra(string $compra)
    {
        $this->compra = $compra;
    }


}


?>
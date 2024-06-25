<?php
namespace MODEL;

class Funcionario{
    private ?int  $id;
    private ?string $nome;
    private ?string $cpf;
    private ?string $telefone;
    private ?string $endereco;

    public function __construct() 
    {
        $this->nome = "";
        $this->cpf = "";
        $this->telefone = "0";
        $this->endereco = "";

    }

    public function getId(){
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


}


?>
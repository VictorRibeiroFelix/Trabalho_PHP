CREATE DATABASE IF NOT EXISTS Trabalho2;

USE Trabalho2;

-- Tabela Cliente
CREATE TABLE cliente (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Nome VARCHAR(255) NOT NULL,
  CPF VARCHAR(11) UNIQUE NOT NULL,
  Telefone VARCHAR(15),
  Endereco VARCHAR(255),
  Compra DECIMAL(10,2)
);

-- Tabela Fornecedor
CREATE TABLE fornecedor (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Nome VARCHAR(255) NOT NULL,
  Marca VARCHAR(255),
  Telefone VARCHAR(15),
  Cidade VARCHAR(100)
);

-- Tabela Funcionario
CREATE TABLE funcionario (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Nome VARCHAR(255) NOT NULL,
  CPF VARCHAR(11) UNIQUE NOT NULL,
  Telefone VARCHAR(15),
  Endereco VARCHAR(255)
);

-- Tabela Produto
CREATE TABLE produto (
  Id INT AUTO_INCREMENT PRIMARY KEY,
  Marca VARCHAR(255),
  Descricao TEXT,
  Preco DECIMAL(10,2)
);
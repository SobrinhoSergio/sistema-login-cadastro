CREATE DATABASE formulario_sergio;

USE formulario_sergio;

CREATE TABLE usuario(
  	
    id INT PRIMARY KEY AUTO_INCREMENT,
  	nome VARCHAR(45) NOT NUll,
  	email VARCHAR(110) NOT NULL,
    senha VARCHAR(15) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
   	sexo VARCHAR(15) NOT NULL,
    data_nasc date NOT NULL,
    cidade VARCHAR(45) NOT NULL,
    estado VARCHAR(45) NOT NULL,
    endereco VARCHAR(45) NOT NULL

);
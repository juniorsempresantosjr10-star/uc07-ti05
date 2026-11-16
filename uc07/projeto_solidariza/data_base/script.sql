CREATE DATABASE solidariza;
 
USE solidariza;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    cep CHAR(8) NOT NULL,
    logradouro VARCHAR(150),
    bairro VARCHAR(100),
    localidade VARCHAR(100),
    uf CHAR(2),
    nivel_acesso ENUM('doador', 'admin')
        DEFAULT 'doador',
    data_cadastro DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE campanhas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT NOT NULL,
    status ENUM('ativa', 'inativa')
        DEFAULT 'ativa',
    data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE doacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    campanha_id INT,
    item_descricao VARCHAR(255) NOT NULL,
    quantidade INT NOT NULL,
    status_logistica ENUM(
        'pendente',
        'aprovado',
        'coletado'
    ) DEFAULT 'pendente',
    data_registro DATETIME DEFAULT CURRENT_TIMESTAMP,
 
    FOREIGN KEY (usuario_id)
        REFERENCES usuarios(id),
 
    FOREIGN KEY (campanha_id)
        REFERENCES campanhas(id)
);
 
 SHOW TABLES;
 
 DESCRIBE usuarios;
 
DESCRIBE campanhas;
 
DESCRIBE doacoes;
 


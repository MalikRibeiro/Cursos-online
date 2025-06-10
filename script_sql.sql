-- Script SQL para criar banco de dados e tabelas em Português
CREATE DATABASE IF NOT EXISTS catalogo_cursos;

USE catalogo_cursos;

CREATE TABLE tabela_usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255),
    data_nascimento DATE,
    cpf VARCHAR(14),
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tabela_cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(255),
    url VARCHAR(255),
    descricao TEXT,
    criado_em TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

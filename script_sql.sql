-- Criação do banco de dados (caso ainda não exista)
CREATE DATABASE IF NOT EXISTS catalogo_cursos;
USE catalogo_cursos;

-- Tabela de usuários (agora com email)
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL
);

-- Tabela de cursos
CREATE TABLE IF NOT EXISTS cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(150) NOT NULL,
    descricao TEXT
);

-- Tabela intermediária para relação muitos-para-muitos entre usuários e cursos
CREATE TABLE IF NOT EXISTS usuarios_cursos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    curso_id INT NOT NULL,
    FOREIGN KEY (usuario_id) REFERENCES usuarios(id) ON DELETE CASCADE,
    FOREIGN KEY (curso_id) REFERENCES cursos(id) ON DELETE CASCADE
);

-- Inserção de usuários (com e-mails)
INSERT INTO usuarios (email, senha) VALUES
('joao.silva@email.com', MD5('senha123')),
('maria.souza@email.com', MD5('minhasenha')),
('carlos.oliveira@email.com', MD5('123456'));

-- Inserção de cursos
INSERT INTO cursos (titulo, descricao) VALUES
('Introdução ao PHP', 'Curso básico sobre a linguagem PHP e conceitos de backend'),
('Banco de Dados com MySQL', 'Aprenda a modelar, criar e manipular bancos de dados com MySQL'),
('Programação Orientada a Objetos', 'Conceitos de POO aplicados com PHP');

-- Vinculando usuários aos cursos
INSERT INTO usuarios_cursos (usuario_id, curso_id) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 3),
(3, 1);

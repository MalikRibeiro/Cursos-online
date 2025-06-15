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
    descricao TEXT,
    url_video VARCHAR(255)
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
('malik.ribeiro@hotmail.com', MD5('admin123')),
('allan.mazurana@gmail.com', MD5('12345')),
('ygor@yahoo.com', MD5('12345')),
('yago.adaime@yahoo.com', MD5('12345')),
('lucas.daniel@outlook.com', MD5('123456'));

-- Inserção de cursos (com URLs de vídeo de exemplo)
INSERT INTO cursos (titulo, descricao, url_video) VALUES
('Introdução ao PHP', 'Curso básico sobre a linguagem PHP e conceitos de backend', 'https://www.youtube.com/watch?v=TfsO0BGvGn0&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&ab_channel=CursoemV%C3%ADdeo'),
('Banco de Dados com MySQL', 'Aprenda a modelar, criar e manipular bancos de dados com MySQL', 'https://www.youtube.com/watch?v=Ofktsne-utM&list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r&ab_channel=CursoemV%C3%ADdeo'),
('HTML e CSS', 'Curso completo de HTML e CSS para iniciantes', 'https://www.youtube.com/watch?v=UB1O30fR-EE&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('JavaScript Básico', 'Aprenda os fundamentos do JavaScript com este curso introdutório', 'https://www.youtube.com/watch?v=W6NZfCO5SIk&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('JavaScript Intermediário', 'Aprofunde seus conhecimentos em JavaScript com este curso intermediário', 'https://www.youtube.com/watch?v=2K8d3b1k4a0&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Python para Iniciantes', 'Curso introdutório de Python, ideal para quem está começando', 'https://www.youtube.com/watch?v=rfscVS0vtbw&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Programação Orientada a Objetos Java', 'Conceitos de POO aplicados com Java', 'https://www.youtube.com/watch?v=KlIL63MeyMY&list=PLHz_AreHm4dkqe2aR0tQK74m8SFe-aGsY&ab_channel=CursoemV%C3%ADdeo'),
('Desenvolvimento Web Completo', 'Curso completo de desenvolvimento web, incluindo HTML, CSS, JavaScript e PHP', 'https://www.youtube.com/watch?v=1Rs2ND1ryYc&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('React para Iniciantes', 'Aprenda os fundamentos do React com este curso introdutório', 'https://www.youtube.com/watch?v=Ke90Tje7VS0&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Node.js para Iniciantes', 'Curso introdutório de Node.js, ideal para quem está começando no backend', 'https://www.youtube.com/watch?v=TlB_eWDSMt4&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Git e GitHub', 'Aprenda a usar Git e GitHub para controle de versão e colaboração em projetos', 'https://www.youtube.com/watch?v=SWYqp7iY_Tc&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Desenvolvimento de APIs com Node.js', 'Curso sobre como desenvolver APIs RESTful usando Node.js', 'https://www.youtube.com/watch?v=1x8d3b1k4a0&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Introdução ao TypeScript', 'Aprenda os fundamentos do TypeScript, uma linguagem superconjunto do JavaScript', 'https://www.youtube.com/watch?v=BwuLxPH8IDs&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Desenvolvimento de Aplicações Móveis com React Native', 'Curso sobre como desenvolver aplicações móveis usando React Native', 'https://www.youtube.com/watch?v=0-S5a0eXPoc&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Introdução ao Docker', 'Aprenda os fundamentos do Docker e como criar contêineres', 'https://www.youtube.com/watch?v=YFl2mCHdv24&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Testes Automatizados com Jest', 'Curso sobre como escrever testes automatizados usando Jest', 'https://www.youtube.com/watch?v=7r4xVDI2vho&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Desenvolvimento de Jogos com Unity', 'Curso introdutório sobre desenvolvimento de jogos usando Unity', 'https://www.youtube.com/watch?v=IlKaB1etrik&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),
('Introdução ao Machine Learning', 'Aprenda os conceitos básicos de Machine Learning com Python', 'https://www.youtube.com/watch?v=Gv9_4yMHFhI&list=PLHz_AreHm4dkN8j2j3bX0c6d7a5a8e9c3&ab_channel=CursoemV%C3%ADdeo'),


-- Vinculando usuários aos cursos
INSERT INTO usuarios_cursos (usuario_id, curso_id) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 3),
(3, 1);


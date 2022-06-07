-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar banco de dados --
USE db_escola;

-- Excluir Tabela
DROP TABLE tb_professor;

-- Criar tabela professor  e aluno --
CREATE TABLE tb_professor (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL
);
CREATE TABLE tb_aluno (
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR(10) UNIQUE NOT NULL
);

-- Mostrar tabelas --
SHOW TABLES;

-- Inserir dados na tabela --
-- A ordem que for passado no insert into importa --
INSERT INTO tb_professor (nome, cpf, email)
VALUES (
    'Igor', '12312312312', 'igor@hotmail.com'
);
INSERT INTO tb_aluno (nome, cpf, email, matricula)
VALUES (
    'Tozetti', '32132132112', 'igor@aluno.com', '435427'
);
-- Selecionar todos os dados da tabela professor --
SELECT * FROM tb_professor;


curso
CREATE TABLE tb_curso (
    nome VARCHAR(100) UNIQUE NOT NULL,
    cargaHoraria INT NOT NULL,
    nivelTecnico VARCHAR(20) NOT NULL
);
disciplina
CREATE TABLE tb_disciplina (
    nome VARCHAR(30) UNIQUE NOT NULL,
    cargaHoraria INT NOT NULL,
);

INSERT INTO tb_curso (nome, cargaHoraria, nivelTecnico)
VALUES(
    'Php', 100, 'Intermediario'
);
INSERT INTO tb_disciplina (nome, cargaHoraria)
VALUES(
    'Banco de Dados', 73
);

-- Excluir dados da tabela --
DELETE FROM tb_professor WHERE id = '2';
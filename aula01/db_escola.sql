-- Para criar um banco de dados --
CREATE DATABASE db_escola;

-- Selecionar banco de dados --
USE db_escola;

-- Criar tabela professor  e aluno --
CREATE TABLE tb_professor (
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL
);
CREATE TABLE tb_aluno (
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    matricula VARCHAR(10) NOT NULL
);

-- Mostrar tabelas --
SHOW TABLES;

-- Inserir dados na tabela --
-- A ordem que for passado no insert into importa --
INSERT INTO tb_professor (nome, cpf, email)
VALUES (
    'Igor', '12312312312', 'igor@hotmail.com'
);


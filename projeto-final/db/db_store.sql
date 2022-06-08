-- criar bd
CREATE DATABASE db_store;

-- entrar no bd
use db_store;

-- criar tabela
CREATE TABLE tb_category (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);


-- Inserir

INSERT INTO tb_category (name, description)
VALUES
('Informática', 'Produtos de Informática e acessórios para computador'),
('Escritório', 'Canetas, cadernos, folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixas de som');


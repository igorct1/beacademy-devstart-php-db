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
CREATE TABLE tb_product (
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255)  NOT NULL,
    value FLOAT(5,2) NOT NULL,
    amount INT(5) NOT NULL,
    -- tipo de dado que salva data e hora --
    created_at DATETIME NOT NULL,
    category_id INT(11) NOT NULL
);


-- Inserir na tabela de categoria

INSERT INTO tb_category (name, description)
VALUES
('Informática', 'Produtos de Informática e acessórios para computador'),
('Escritório', 'Canetas, cadernos, folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixas de som');

INSERT INTO tb_category (name, description)
VALUES
( 
    'Hardware', 'Placa de vídeo, SSD, Memória Ram, etc.'
);

INSERT INTO tb_product(name, description, photo, value, amount, category_id, created_at)
VALUES
('Teclado', 'Teclado HyperX', 'https://m.media-amazon.com/images/I/51-XotrdbXL._AC_SY450_.jpg', 200, 5, 1, '2022-05-15 09:30'),
('Teclado', 'Teclado Razer', 'https://m.media-amazon.com/images/I/51-XotrdbXL._AC_SY450_.jpg', 200, 5, 2, '2022-05-15 09:30'),
('Teclado', 'Teclado GFallen', 'https://m.media-amazon.com/images/I/51-XotrdbXL._AC_SY450_.jpg', 200, 5, 3, '2022-05-15 09:30');
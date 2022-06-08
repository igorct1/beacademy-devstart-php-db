USE db_escola;

-- Inserir apenas 1 registro --
INSERT INTO tb_professor(nome, email, cpf)
VALUES(
    'Chiquim das Tapiocas', 'chiquimtapioqueiro@gmail.com', '12312312313'
);


-- Inserir multiplos registros --
INSERT INTO tb_professor(nome, email, cpf)
VALUES
    ('Igor', 'igorct@gmail.com', '12312312315'),
    ('Coutinho', 'igorct1@gmail.com', '12312312316'),
    ('Tozetti', 'igorct2@gmail.com', '12312312317');


-- Excluir 1 registro --
DELETE FROM tb_professor WHERE id = '1';

-- Excluir todos --
DELETE FROM tb_professor;

-- Editar dados de 1 registro
UPDATE tb_professor SET nome= "Maicon" WHERE id= '1';

-- Todos
UPDATE tb_professor SET nomme = 'Francisco';

-- Selecionar todos os dados de todos os professores --
SELECT * FROM tb_professor;

-- Selecionar todos os dados do professor cujo id = 5 --
SELECT * FROM tb_professor WHERE id= '5' ;

-- Selecionar alguns dados de todos os professor --
SELECT nome, cpf FROM tb_professor;
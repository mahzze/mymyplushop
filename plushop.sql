
CREATE DATABASE IF NOT EXISTS mymy_Plushop DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE mymy_Plushop;

DROP TABLE IF EXISTS produtos;

CREATE TABLE produtos (
  id tinyint AUTO_INCREMENT NOT NULL PRIMARY KEY,
  nome varchar(50) DEFAULT NULL,
  imagem varchar(50) DEFAULT NULL,
  preco decimal(6,2) DEFAULT NULL
);


INSERT INTO produtos (nome, imagem, preco) VALUES
('ursinho fluffy de 30cm', 'fluffy.png', '49.99'),
('ice vulpix', 'ice vulpix.jpeg', 56.90),
('sylveon', 'sylveon.jpeg', 74.99),
('pikachu', 'pikachu.jpeg', 59.90),
('stitch', 'stitch.jpeg', 39.99),
('unicornio', 'unicornio.jpeg', 59.90),
('coruja', 'coruja.jpeg', 46.60),
('harry potter', 'hp.jpeg', 109.90),
('Doutor Estranho', 'dr estranho.jpeg', 59.90),
('porquinho Pua', 'porquinho.jpeg', 89.90),
('coleção de Among Us', 'colecAmong.jpeg', 142.50),
('polvo reversivel', 'polvoRev.jpeg', 39.90);

DROP TABLE IF EXISTS usuario;

CREATE TABLE usuario (
  id    smallint PRIMARY KEY AUTO_INCREMENT,
  email varchar(40) NOT NULL,
  nome  varchar(40) NOT NULL,
  senha varchar(20) NOT NULL
);

INSERT INTO usuario (email , nome , senha) VALUES ("mymy_Plushop@gmail.com", "admin", "senha");
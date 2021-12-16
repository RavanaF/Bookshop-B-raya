CREATE DATABASE bdLivros CHARSET utf8;

USE bdLivros;

CREATE TABLE Cliente(
id INTEGER NOT NULL AUTO_INCREMENT,
nome          VARCHAR(90),
telefone      INT,
email         VARCHAR(100),
PRIMARY KEY (id)
);

CREATE TABLE Contato(
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome  VARCHAR(90),
email VARCHAR(100),
mensagem  VARCHAR(250)
);

SELECT *FROM Cliente;

SELECT *FROM Contato;

SELECT *FROM Cliente WHERE nome LIKE 'teste' AND email LIKE 'teste@gmail.com';

CREATE DATABASE ATIVIDADE
DEFAULT CHARACTER SET utf8;


USE ATIVIDADE;

CREATE TABLE USUARIO(
CODIGO integer auto_increment PRIMARY KEY NOT NULL,
NOME VARCHAR (40) NOT NULL,
quantidade integer not null,
precoCompra decimal(8,2) not null,
precoVenda decimal(8,2) not null,
validade date not null
)ENGINE = INNODB;
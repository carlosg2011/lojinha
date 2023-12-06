create database TPA_ATIVDADE;

use TPA_ATIVDADE;
create table clientes(
id_cliente int primary key not null auto_increment,
nome varchar(80) not null,
cpf char(15) not null,
Telefone varchar(13) not null,
email varchar(100) not null,
endereco varchar(100) not null
);

INSERT INTO clientes (id_cliente, nome, cpf, Telefone, email , endereco) VALUES ('1', 'aluno', '123.456.789-00', '(99)9876-5432','aluno@gmal.com','rua dos bobos 123');

select * from clientes;
create database aula_php_junior;
use aula_php_junior; -- use é o comando para 
-- ultilizar um banco de dados 

create table usuarios (
	id_usuario int not null auto_increment primary key,
    nome_usuario varchar(200),
    usuario varchar(10) unique,
    email varchar(200),
    cpf char(11),
    dt_nascimento date,
    tipo_usuario varchar(10),
    status char(1)
);


describe usuarios;

insert into usuarios values(
	null,
    'Junior',
    'juninho123',
    '123456', -- senha em ambiente real é HASH
    'junior@unicid.edu.br',
    '1234567891011',
    '2020-12-18', -- ano mês dia
    'admin',
    'a'
);
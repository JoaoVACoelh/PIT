create database PIT;
use PIT;

drop table usuario;
create table usuario (
cpf char(14) not null primary key,
nome varchar(20) not null,
senha varchar(16) not null,
email varchar(80) not null
);

select * from usuario;
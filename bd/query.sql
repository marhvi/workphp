create database if not exists empresa;
use empresa;

create or replace table funcionario(
    id int primary key auto_increment,
    nome varchar (250) not null,
    email varchar(250) not null unique,
    cpf int not null unique,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

create or replace table login(
    id int primary key auto_increment,
    email varchar(250) not null unique,
    senha varchar (255) not null,
    created_at TIMESTAMP not null default CURRENT_TIMESTAMP 
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

insert into login(email, senha) values ('mv@gmail.com',md5('mv@123'));
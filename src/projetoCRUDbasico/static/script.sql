create database if not exists db01;
use db01;
create table aluno(
    id int primary key auto_increment,
    matricula int not null unique,
    nome varchar(150) not null,
    email varchar(150) not null unique,
    sexo varchar(1) not null
); ---só criar no xampp e tá joia :)
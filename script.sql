create database peton;

use peton;

create table usuario(id int auto_increment, 
nome varchar(100) not null, 
email varchar(50) not null, 
senha varchar(100) not null, 
telefone varchar(15) not null, 
bairro varchar(50) not null, 
cidade varchar(50) not null, 
estado varchar(2) not null, 
primary key(id));

create table pet(id int auto_increment, 
tipo varchar(50) not null, 
raca varchar(50) not null, 
idade int(2), 
descricao varchar(255) not null, 
data timestamp, 
foto varchar(255) not null, 
vacina varchar(2) not null, 
cod_usuario int not null, 
primary key(id), foreign key(cod_usuario) references usuario(id));

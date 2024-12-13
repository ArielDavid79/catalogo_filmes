create database filmesdb;

use filmedb;

create table filme (
    id int auto_incremente primary key,
    nome varchar(255) not null,
    ano int not null,
    descricao text,
    imagem text
);

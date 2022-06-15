-- Drop banco de dados
-- drop database prova2;
/*
-- Criação do banco de dados 
create database prova2;

-- Selecionar banco de dados 
use prova2;

drop table if exists fluxo_caixa;

-- Criação da tabela usuario
create table fluxo_caixa(
	id integer not null auto_increment,
    data date not null,
    tipo varchar(10) not null,
    valor decimal(10,2) not null,
	historico varchar (150) not null,	
    cheque varchar(3)  not null, 
    primary key (id)
);
*/
-- select * from fluxo_caixa;
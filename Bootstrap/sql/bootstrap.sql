-- Drop banco de dados
-- drop database bootstrap;
/*
-- Criação do banco de dados 
create database bootstrap;

-- Selecionar banco de dados 
use bootstrap;

drop table if exists fluxo_caixa;

-- Criação da tabela usuario
create table fluxo_caixa(
	id integer not null auto_increment,
    data date not null,
    nome varchar(100),
    tipo varchar(10) not null,
    valor decimal(10,2) not null,
	historico varchar (150) not null,	
    cheque varchar(3)  not null, 
    foto_blob blob,
	foto_nome varchar(100),
    primary key (id)
);
*/
select * from fluxo_caixa;
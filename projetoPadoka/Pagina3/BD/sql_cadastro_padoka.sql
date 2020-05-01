create database padoka;
use padoka;
 create table estados(
	 idEstado int not null auto_increment primary key, 
	 nome varchar(40) not null,
	 sigla varchar(2) not null
 );
 insert into estados values (DEFAULT,'Acre','AC');
 create table criticas(
	idCritica int auto_increment not null primary key,
    nome varchar(100) not null,
    dtNasc date,
    idEstado int,
    cep varchar(9),
    bairro varchar(100),
    cidade varchar(100),
    url varchar(200),
    email varchar(100) not null,
    critica varchar(400) not null,
    CONSTRAINT FK_estados_criticas FOREIGN KEY (idEstado) REFERENCES estados(idEstado) ON UPDATE CASCADE
 );

 
 show tables;
 select * from criticas;
create database padoka;
use padoka;
show tables;
drop table tbl_criticas;
 create table estados(
	 idEstado int not null auto_increment primary key, 
	 nome varchar(40) not null,
	 sigla varchar(2) not null
 );
 insert into estados values (DEFAULT,'Santa Catarina','SC');
 select * from estados;
 delete from estados where idEstado = 4 ;
 create table tbl_sexo(
	idSexo int not null auto_increment primary key,
	Siglasexo varchar(1),
    nomeSexo varchar(20)
 );
 insert into tbl_sexo values (default,'N','Nao binario');
 create table tbl_criticas(
	idCritica int auto_increment not null primary key,
    nome varchar(100) not null,
    dtNasc date,
    cep varchar(9),
    idEstado int,
    bairro varchar(100),
    cidade varchar(100),
    facebookURL varchar(100),
    homePageURL varchar(200),
    telefone varchar(9),
    celular varchar(10),
    email varchar(100) not null,
    idSexo int,
    profisao varchar(50),
    tipoCritica varchar(1),
    critica varchar(400) not null,
    constraint FK_sexo_critica foreign key(idSexo) references tbl_sexo(idSexo),
    CONSTRAINT FK_estados_criticas FOREIGN KEY (idEstado) REFERENCES estados(idEstado) ON UPDATE CASCADE
 );
 insert into tbl_criticas values (DEFAULT,'iuri Sampaio','2002-09-26','09296-355',2,'Remedios',
 'Osasco','http://facebook.com/IuriSampaio','http://github.com/IuriSampaio','3656-2342','98811-1710'
 ,'iurisampaio18@gmail.com',1,'MLK do TI','S','muito bom site cara');
 show tables;
 select * from tbl_criticas;
 
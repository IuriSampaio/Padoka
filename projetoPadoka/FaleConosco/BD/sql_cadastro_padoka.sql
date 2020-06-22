create database padoka;
use padoka;
show databases;
show tables;
drop table tbl_criticas;
 create table estados(
	 idEstado int not null auto_increment primary key, 
	 nome varchar(40) not null,
	 sigla varchar(2) not null
 );

 insert into estados values (DEFAULT,'Alagoas','AL');

 delete from estados where idEstado = 4 ;
 create table tbl_sexo(
	idSexo int not null auto_increment primary key,
	Siglasexo varchar(1),
    nomeSexo varchar(20)
 );
 insert into tbl_sexo values (default,'F','Feminino');
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
 show tables;
 #########################CONTEUDO DE QUEM SOMOS#############################
create table tblQuemSomos(
	idVersao int not null auto_increment primary key,
    slide1 varchar(200),
    slide2 varchar(200),
    slide3 varchar(200),
    slide4 varchar(200),
    imgMoba varchar(200),
    titulo varchar(40) not null,
    paragrafo1 varchar(250),
    paragrafo2 varchar(250),
    paragrafo3 varchar(250),
    paragrafo4 varchar(250)
);
insert into tblQuemSomos values(DEFAULT,'slide1','slide2','slide3','slide4','imgMoba','titulo','paragrafo1'
,'paragrafo2','paragrafo3','paragrafo4');

select * from tblQuemSomos;
################# CURIOSIDADES DA PADOKA 
create table tbl_txt_curiosidades(
	idtxtCuriosidades int not null primary key auto_increment,
    txt1 varchar(300) not null,
    txt2 varchar(300) not null,
    txt3 varchar(300) not null
);
create table tbl_img_curiosidades(
	idImgCuriosidades int not null auto_increment primary key,
    img1 varchar(200) not null,
    img2 varchar(200) not null,
    img3 varchar(200) not null
);
create table tbl_curiosidades(
	idCuriosidades int not null auto_increment primary key,
	idtxtCuriosidade int,
    idImgCuriosidades int,
    constraint FK_txt_curiosidade foreign key (idtxtCuriosidade) references tbl_txt_curiosidades(idtxtCuriosidades),
    constraint FK_img_curiosidade foreign key (idImgCuriosidades) references tbl_img_curiosidades(idImgCuriosidades)
 );
 
 ######################ADM. USR####################
create table tbl_permicao(
	idPermicao int not null auto_increment primary key,
    nomePermicao varchar(70) not null,
    adm_funcionario boolean,
    adm_conteudo boolean,
    adm_faleConosco boolean,
    adm_produtos boolean
);
create table tbl_user(
	idUsr int not null auto_increment primary key,
	nomeUsr varchar(100) not null,
	email varchar(200) not null,
	telefone varchar(15) not null,
	CPF varchar(13) not null,
	senha varchar(40) not null,
    idPermicao int,
    constraint FK_permicao_usr foreign key(idPermicao) references tbl_permicao(idPermicao)
);



select * from tbl_user;
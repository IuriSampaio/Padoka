create database padoka;
use padoka;
show databases;
show tables;
SELECT * FROM tbl_user where nomeUsr = 'Tostoy';
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
 insert into tbl_sexo values (default,'N','Não binario');
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
select * from tblQuemSomos;

update tblQuemSomos set slide1 ='5f08bbcb58b785d49e42f5b171b62129.png', slide2 ='d3d8db4e4a9051138480b9c155c77312.jpg', slide3 ='721c8fb540c9b0e417015aed3b681da7.jpg', slide4 ='a50e708efb33576017d717f1c2f825b3.jpg', imgMoba = '2151da0aac21e0b19de11cc5073d598c.jpg', titulo = 'Oque é a panificadora alfa?', paragrafo1 = 'Em um município chamado Codó, no estado do Maranhão, existe a emblemática Panificadora Alfa. Um belo dia, o dono do estabelecimento pediu para um amigo produzir um comercial divulgando o comércio. De acordo com Gabriel, filho do dono, o produtor filmou algumas imagens da padaria e o resto fez em casa: gravou as próprias filhas falando sobre as delícias gastronômicas produzidas na panificadora. O resultado? Alguns interpretam como um fiasco, outros consideram a obra prima do mundo do marketing. Mas o fato é que a propaganda deu certo, cumprindo sua função de divulgar – e como! – a Panificadora Alfa. Em entrevista, Gabriel comenta que a padaria já era “a mais movimentada da região” e que, depois do comercial, as pessoas passaram a frequentá-la cada vez mais.', paragrafo2 = 'O vídeo do comercial é um viral de internet (um conteúdo único que se propaga pela rede com rapidez). A partir dele, vieram os memes (conteúdos ressignificados e reapropriados a partir da mensagem original). O principal meme gerado pela Panificadora Alfa é a catchphrase “chega a manteiga derrete”, utilizada pela “garota propaganda” para descrever o pão quentinho – e, posteriormente, ressignificada pelos internautas para se referir a algo muito prazeroso. Além disso, algumas Image Macros contendo as falas das crianças e gifs de suas expressões caricatas também foram produzidas, propagadas e utilizadas por internautas em seus perfis.', paragrafo3 = 'Até a data desta postagem (junho de 2017), o vídeo original atingiu mais de 2 milhões de visualizações no YouTube. Já a ‘versão auto-tune’ da propaganda possui 5 milhões de acessos. Ambos foram e ainda são compartilhados através das redes sociais, assim como os memes. Além disso, a catchphrase acima mencionada é muitas vezes empregada em situações cotidianas, como em conversas, por exemplo. ', paragrafo4 = 'A página do Facebook da Panificadora Alfa também faz a alegria dos fãs da padaria com novos comerciais, esporadicamente – porém, nenhum tão bom quanto o original. Fotos dos produtos e páginas como “Por Onde Andam as Crianças da Panificadora Alfa” complementam o sucesso atingido pela campanha.', imgProgapanda = 'eeb3aa5fd27f48ba8b75944360bfcb52.jpg', localizacao1 = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.752454776763!2d-43.887344085654625!3d-4.45707374855845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78bf13f9b740c8d%3A0x33aaaace6cfd5c80!2sPanificadora%20Alfa!5e0!3m2!1spt-BR!2sbr!4v1593716529992!5m2!1spt-BR!2sbr', localizacao2 = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.752454776763!2d-43.887344085654625!3d-4.45707374855845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78bf13f9b740c8d%3A0x33aaaace6cfd5c80!2sPanificadora%20Alfa!5e0!3m2!1spt-BR!2sbr!4v1593716529992!5m2!1spt-BR!2sbr', localizacao3 = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.752454776763!2d-43.887344085654625!3d-4.45707374855845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x78bf13f9b740c8d%3A0x33aaaace6cfd5c80!2sPanificadora%20Alfa!5e0!3m2!1spt-BR!2sbr!4v1593716529992!5m2!1spt-BR!2sbr' where idVersao = 4;

alter table tblQuemSomos modify column loja1 varchar(400);

show tables;
select * from tblQuemSomos;

insert into tblQuemSomos values(DEFAULT,'9281ae2e00133fb99cd7c5bd7d38e314.jpg','e3b9a2afc04f4f60d846583d3a9047b1.jpg','e7c22f065f127adc0d06d7f7cad76c0f.jpg','8d308fb75c6d369b7f79d381a5bad9fd.jpg','a235a5b2679c0cda1c4adc8e54435ff8.png','História do nosso comercial','Em um município chamado Codó, no estado do Maranhão, existe a emblemática Panificadora Alfa.Um belo dia, o dono do estabelecimento pediu para um amigo produzir um comercial divulgando o comércio. De acordo com Gabriel, filho do dono, o produtor filmou algumas imagens da padaria e o resto fez em casa: gravou as próprias filhas falando sobre as delícias gastronômicas produzidas na panificadora','O resultado? Alguns interpretam como um fiasco, outros consideram a obra prima do mundo do marketing. Mas o fato é que a propaganda deu certo, cumprindo sua função de divulgar – e como! – a Panificadora Alfa. Em entrevista, Gabriel comenta que a padaria já era “a mais movimentada da região” e que, depois do comercial, as pessoas passaram a frequentá-la cada vez mais.','O vídeo do comercial é um viral de internet (um conteúdo único que se propaga pela rede com rapidez). A partir dele, vieram os memes (conteúdos ressignificados e reapropriados a partir da mensagem original). O principal meme gerado pela Panificadora Alfa é a catchphrase “chega a manteiga derrete”, utilizada pela “garota propaganda” para descrever o pão quentinho – e, posteriormente, ressignificada pelos internautas para se referir a algo muito prazeroso.Além disso, algumas Image Macros contendo as falas das crianças e gifs de suas expressões caricatas também foram produzidas, propagadas e utilizadas por internautas em seus perfis.','Até a data desta postagem (junho de 2017), o vídeo original atingiu mais de 2 milhões de visualizações no YouTube. Já a ‘versão auto-tune’ da propaganda possui 5 milhões de acessos. Ambos foram e ainda são compartilhados através das redes sociais, assim como os memes. Além disso, a catchphrase acima mencionada é muitas vezes empregada em situações cotidianas, como em conversas, por exemplo. A página do Facebook da Panificadora Alfa também faz a alegria dos fãs da padaria com novos comerciais, esporadicamente – porém, nenhum tão bom quanto o original. Fotos dos produtos e páginas como “Por Onde Andam as Crianças da Panificadora Alfa” complementam o sucesso atingido pela campanha.');

################# CURIOSIDADES DA PADOKA 
create table if not exists tbl_curiosidade(
	idcuriosidades int not null auto_increment primary key,
    imgLoja1 varchar(150) not null,
    txtLoja1 varchar(300) not null,
    imgLoja2 varchar(150) not null,
    txtLoja2 varchar(300) not null,
    imgLoja3 varchar(150) not null,
    txtLoja3 varchar(300) not null 
);
select * from tbl_curiosidade;
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
SELECT tbl_user.* , tbl_permicao.* FROM tbl_user, tbl_permicao 
where nomeUsr = 'iuri' 
and senha = '202cb962ac59075b964b07152d234b70' 
and tbl_permicao.idPermicao = tbl_user.idPermicao;
select * from tbl_user;

######################## NOSSAS LOJAS ######################


select * from tblQuemSomos;

create table tbl_nossasLojas(
	idLojas int not null auto_increment primary key,
    imgLoja1 varchar(150) not null,
    txtLoja1 varchar(300) not null,
    imgLoja2 varchar(150) not null,
    txtLoja2 varchar(300) not null,
    imgLoja3 varchar(150) not null,
    txtLoja3 varchar(300) not null    
);
select * from tbl_nossasLojas;
alter table tbl_nossasLojas add column titulo3 varchar(30);
show tables;

DELIMITER $$
create function function_Saudacao()
	returns char(20) # -> def	ine o tipo de dados que sera retornado
		deterministic # -> não tem dado como argumento
        begin # -> inicio
		
        # DECLARANDO AS VARIAVEIS
        declare horaServidor time;
        declare hora char(2);
        declare mensagem char(20);

        # ATRIBUINDO VALORES
        set horaServidor = current_time();
        set hora = hour(horaServidor);
            #estrutura de decisão
			if hora>=6 and hora<12 then 
				set mensagem = 'BOM DIA';
			elseif hora>=12 and hora<18 then
				set mensagem = 'BOA TARDE';
			elseif hora>=18 and hora<=00 then
				set mensagem = 'BOA NOITE';
			elseif hora>00 and hora<6 then
				set mensagem = 'BOA MADRUGADA';
			end if;
		# retorno da função
        return mensagem;
	# fim da função
	end $$
    
#select function_Saudacao() as msg;

current_time();
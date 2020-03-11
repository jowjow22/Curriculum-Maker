drop database if exists db_curriculo;
create database db_curriculo;
use db_curriculo;

create table tb_pessoa(
cd_pessoa int(5)auto_increment not null primary key,
nm_nome varchar(70)not null,
nm_profissao varchar(40),
ds_objetivo longtext,
nm_email varchar(125)not null,
nm_password varchar(32)not null,
dt_nascimento varchar(11)not null,
nr_telefone varchar(20),
url_website varchar(100),
ds_endereco varchar(150)
);

create table tb_formaçao(
cd_formaçao int(6)not null auto_increment primary key,
nm_instituiçao varchar(155)not null,
dt_anoini int(4)not null,
dt_anofim int(4)not null,
nm_area varchar(70)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa) 
);

create table experiencia(
cd_experiencia int(6)auto_increment primary key not null,
nm_serviço varchar(45)not null,
nm_area varchar(25)not null,
ds_descriçao varchar(255)not null, 
dt_anoini int(4)not null,
dt_anofim int(4)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa) 
);
create table referencias(
cd_referencias int(6)auto_increment primary key not null,
nm_referencia varchar(80)not null, 
nm_profissao varchar(80)not null,
nr_telefone varchar(20)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa)
);
create table tb_habilidades(
cd_habilidade int(6)auto_increment primary key not null,
nm_habilidade varchar(45)not null, 
qt_habilidade int(3)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa)
);
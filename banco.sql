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

create table tb_formacao(
cd_formacao int(6)not null auto_increment primary key,
nm_curso varchar(12)not null,
nm_instituicao varchar(155)not null,
dt_anoini varchar(4)not null,
dt_anofim varchar(4)not null,
ds_opcional varchar(130) not null, 
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa) 
);

create table tb_exp(
cd_exp int(6)auto_increment primary key not null,
nm_servico varchar(45)not null,
nm_empresa varchar(25)not null,
ds_descricao varchar(255)not null, 
dt_anoini int(4)not null,
dt_anofim int(4)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa) 
);
create table tb_ref(
cd_ref int(6)auto_increment primary key not null,
nm_ref varchar(80)not null, 
nm_profissao varchar(80)not null,
nr_telefone varchar(20)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa)
);
create table tb_hab(
cd_hab int(6)auto_increment primary key not null,
nm_hab varchar(45)not null, 
qt_hab int(3)not null,
id_pessoa int(5)not null, 
foreign key(id_pessoa)references tb_pessoa(cd_pessoa)
);   
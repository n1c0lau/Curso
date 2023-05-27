create database N8_MIniProjeto;
use N8_MiniProjeto;

create table Usuario
(
id_Usuario int not null auto_increment primary key,
nome_Usuario varchar(50) not null,
nascimento_Usuario datetime not null,
cadastro_Usuario timestamp not null,
usuario_Usuario varchar(50) not null,
senha_Usuario varchar(50) not null,
img_Usuario longblob not null,
obs_Usuario varchar(255) null,
status_Usuario varchar(30) not null
)
select*from Usuario;
insert into Usuario
(nome_Usuario,nascimento_Usuario,usuario_Usuario,senha_Usuario,img_Usuario,obs_Usuario,status_Usuario)
values 
('Administrador','2005/03/09','N10','123','','','Ativo'),
('Miguel','2012/08/13','MI10','123','','','Ativo'),
('Izabela','2005/12/09','IZA','123','','','Ativo'),
('Ailton','1979/04/21','A10','123','','','Ativo'),
('Maria','1987/03/17','M10','123','','','Ativo');

create table categoria
(
id_categoria int not null auto_increment primary key,
nome_categoria varchar(50) not null,
descricao_categoria varchar(500) not null, 
obs_categoria varchar(255) null,
status_categoria varchar(30) not null 
)
select*from categoria;
insert into categoria
(nome_categoria,descricao_categoria,obs_categoria,status_categoria)
values 
('Premium','Original','','Ativo'),
('Ouro','Primeira Linha','','Ativo'),
('Prata','Segunda Linha','','Ativo'),
('Bronze','Tailandesa','','Ativo'),
('Outras','China','','Ativo');
create table produto
(
id_produto int not null auto_increment primary key,
nome_produto varchar(50) not null,
valor_produto char(50) not null,
descricao_produto varchar(100) not null,
obs_produto varchar(255) null,
status_produto varchar(20) not null,
id_historico_produto int not null,
id_categoria_produto int not null,
constraint FK_id_categoria_produto foreign key(id_categoria_produto) references categoria(id_categoria)
)
select*from produto;
create table historico
(
 id_historico int not null auto_increment primary key,
 nome_historico varchar(100) not null ,  
 valor_historico char(50) not null  ,
 quantidade_historico char(50) not null , 
 obs_historico longblob not null,   
 status_historico varchar(255) null,  
 id_usuario_historico int not null,   
 datasaida_historico timestamp not null, 
 id_produto_historico int not null,
 constraint FK_id_produto_historico foreign key(id_produto_historico) references produto(id_produto),
 constraint FK_id_usuario_historico foreign key(id_usuario_historico) references Usuario(id_Usuario)
 )
 select*from historico;
 drop table historico
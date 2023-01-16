use test;

describe produtos;


insert into produtos
(codigo, produto, preco, qtde)
values
('mo17', 'Monitor15', '280', '300'),
('cp40', 'Processador 4.0 Ghz', '420.9', '100'),
('cp24', 'Processador2', '298.9', '180'),
('ms1', 'Mouse Ôptico', '45.5', '190'),
('tc01', 'Teclado Básico', '15.25', '175'),
('tc02','Teclado Multimidia', '23.9', '110'),
('cl01', 'Celular de teclas', '189.9', '50'),
('cl02', 'Celular touch', '459.9', '89'),
('tl01', 'Telefone com fio', '59.9', '30'),
('tl02', 'Telefone sem fio', '175', '75'),
('tl03', 'Telefone sem fio com ramal', '320.2', '130');


alter table produtos
add column cat int;

update produtos
set cat = '1'
where codigo = 'cl01';

select * from produtos
where cat = '2' or cat = '3';

show tables;

insert into produtos 
(codigo, produto, preco, qtde, cat)
values
('r01', 'Roda de Aço 14', '80', '130', '3'),
('r02', 'Roda Liga 17', '320', '80', '3');




create table if not exists produtos(
codigo varchar(30) not null, 
produto varchar(50) not null unique,
preco float,
qtde int,
primary key(codigo)
)DEFAULT charset = utf8;

create table if not exists usuario(
id int not null auto_increment,
nome varchar(200) not null,
cpf varchar(13),
dt_nascimento varchar(12) default '1900-01-01',
primary key(id)
)DEFAULT charset = utf8;

describe usuario;

select * from usuario;
use fullstackmotos;

 
 
create table produto(
idproduto int primary key auto_increment,
nome varchar(150) not null,
descricao varchar(150) not null,
preco  decimal(9,2) not null,
preco_final decimal(9,2) not null,
imagem varchar(200) not null)ENGINE=InnoDB ;


 -- drop table  produto;
 
 -- DELETE FROM produto 
 -- WHERE idproduto = 6;

select * from produto;

insert into produto ( nome, descricao, preco, preco_final, imagem) value
 ('honda',' CBR 1000 ', 80000.00, 78000.00, 'img/honda_1.jpg'),
 ('honda','CB Twister CBS', 12000.00, 11000.00,'img/honda_2.jpg'),
('honda',' CB 600 2006', 22000.00, 21000.00, 'img/honda_3.jpg');

insert into produto ( nome, descricao, preco, preco_final, imagem) value
 ('Yamaha','  R1', 90000.00, 87000.00, 'img/yamaha_1.jpg'),
('Yamaha','R3', 106500.00, 103000.00,'img/yamaha_3.jpg'),
('Yamaha',' R6', 22000.00, 19000.00, 'img/yamaha_2.jpg');


insert into produto ( nome, descricao, preco, preco_final, imagem) value
('Ducati','  Monster 1200', 45000.00, 44000.00, 'img/ducati_2.jpg'),
('Ducati',' 1299 Panigale', 65000.00, 58000.00,'img/ducati_3.jpg');


insert into produto ( nome, descricao, preco, preco_final, imagem) value
('Harley Davidson',' Harley Davidson Xl 883n', 53500.00, 44000.00, 'img/Harley_Davidson_2.jpg'),
('Harley Davidson','HD Streetfighter 975', 120000.00, 117000.00,'img/Harley_Davidson_4.jpg');


insert into produto ( nome, descricao, preco, preco_final, imagem) value
('Kawasaki',' ER-6n', 93000.00, 89000.00, 'img/Kawasaki_1.jpg'),
('Kawasaki','Ninja', 85000.00, 78000.00,'img/Kawasaki_2.jpg');


 CREATE TABLE tb_pedido (
id_pedido INT auto_increment,
nome_cliente VARCHAR(45) NOT NULL,
endereco VARCHAR(150) NOT NULL,
telefone VARCHAR(15) NOT NULL,
nome_produto VARCHAR(45) NOT NULL,
valor_unitario VARCHAR(15) NOT NULL,
quantidade VARCHAR(15) NOT NULL,
valor_total VARCHAR(15) NOT NULL,
idproduto int,
data datetime default now(),
PRIMARY KEY (id_pedido));


insert into tb_pedido (nome_cliente, endereco, telefone,  nome_produto, valor_unitario, quantidade,
     valor_total)
      values
      ('josiel',' teste', '56355326','honda', '78.000,00', '1','78.000,00');

  select * from tb_pedido;
  
  
 -- DELETE FROM tb_pedido 
-- WHERE id_pedido = 1;

--  drop table  tb_pedido;
  
create table comentario(
id int auto_increment,
nome varchar(45),
msg varchar(200),
data datetime default now(),
primary key(id));

select * from comentario;
-- drop table  comentario;




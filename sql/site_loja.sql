create schema fullstackmotos;
use fullstackmotos;

 CREATE TABLE produto (
 idproduto int not null,
 nome varchar(150),
 descricao varchar(45),
 preco float,
 precofinal float,
 imagem varchar(150),
PRIMARY KEY (idproduto));

INSERT INTO `fullstackmotos`.`produto` (`idproduto`, `nome`, `descricao`, `preco`, `precofinal`, `imagem`)
 VALUES ('11', 'Kawasaki ', 'Kawasaki ER-6n', '  93000.00', '89000.00', 'img/Kawasaki_1.jpg'),
 ('12', 'Kawasaki ', 'Kawasaki Ninja', '  85000.00', '78000.00', 'img/Kawasaki_2.jpg');
 
 CREATE TABLE `fullstackmotos`.`tb_pedido` (
  `id_pedido` INT NOT NULL,
  `nome_cliente` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(150) NOT NULL,
  ` telefone` VARCHAR(15) NOT NULL,
  ` nome_produto` VARCHAR(45) NOT NULL,
  `valor_unitario` FLOAT NULL,
  `quantidade` INT NOT NULL,
  `valor_total` FLOAT NULL,
   idproduto int not null,
  PRIMARY KEY (`id_pedido`),
  FOREIGN KEY (idproduto) REFERENCES produto (idproduto));

  select * from produto;
  

 
 


-- CRIANDO O BANCO DE DADOS
DROP DATABASE IF EXISTS tcc;
CREATE DATABASE IF NOT EXISTS tcc
default character set utf8
default collate utf8_general_ci;

USE tcc; 

/*criando as tabelas*/
/*Tabela Cardapio*/
CREATE TABLE Cardapio(
cod_Cardapio INT(100) unsigned NOT NULL auto_increment PRIMARY KEY,
categoria_Cardapio VARCHAR(100) NOT NULL,
foto_Cardapio VARCHAR(100)
);
/*Tabela Item*/
CREATE TABLE Item (
cod_Item INT(100) NOT NULL auto_increment PRIMARY KEY,
cod_Cardapio INT(100) unsigned NOT NULL,
nome_Item VARCHAR(100) NOT NULL,
descricao_Item VARCHAR(100) NOT NULL,
preco_Item VARCHAR(20) NOT NULL,
Ativo tin INT(1) default 1 NOT NULL,
foto_Item VARCHAR(100) /*Utilização de Blob para armazenar a Imagem*/
);
SELECT * FROM Item;
/*Tabela Mesa*/
create table Mesa(
qr_Code VARCHAR(100) UNIQUE NOT NULL PRIMARY KEY,
numero_Mesa VARCHAR(100) NOT NULL
);
/*tabela Pedido*/
create table Pedido(
cod_Pedido INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
horario_Pedido timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
observacao_Pedido VARCHAR(200),
qr_Code VARCHAR(100) NOT NULL,
valor_total DECIMAL(10,2), 
status_Pedido ENUM('Pendente','Concluido','Entregue') default 'Pendente'
);

/*tabela ItemPedido*/
create table ItemPedido(
cod_Pedido INT(100) NOT NULL,
cod_Item INT(100) NOT NULL,
quantidade INT(100) NOT NULL,
valor_Item DECIMAL (10,2)
);

/*tabela Funcionario*/
create table Funcionario(
cod_Funcionario INT(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_Funcionario VARCHAR(100) NOT NULL,
cpf_Funcionario VARCHAR(14) unique NOT NULL,
telefone_Funcionario VARCHAR(16) unique NOT NULL,
cargo_Funcionario ENUM('Garçom','Cozinheiro','Administrador'),
email_Funcionario VARCHAR(100) unique NOT NULL,
Ativo tin INT(1) default 1 NOT NULL,
senha VARCHAR(50) NOT NULL
);

/*adicionando a chaves estrangeiras em suas respectivas tabelas*/
ALTER TABLE Item ADD CONSTR INT FK_cod_Cardapio
FOREIGN KEY (cod_Cardapio)
REFERENCES Cardapio (cod_Cardapio)
ON DELETE CASCADE;

ALTER TABLE Pedido ADD CONSTR INT FK_qrCode
FOREIGN KEY (qr_Code)
REFERENCES Mesa (qr_Code);

ALTER TABLE ItemPedido ADD CONSTR INT FK_Item_Pedido/*as FK nao tem o mesmo nome pois o banco não permite nomes duplicados*/
FOREIGN KEY (cod_Item)
REFERENCES Item (cod_Item)
ON DELETE CASCADE;

ALTER TABLE ItemPedido ADD CONSTR INT FK_codigo_Pedidos/*as FK nao tem o mesmo nome pois o banco não permite nomes duplicados*/
FOREIGN KEY (cod_Pedido)
REFERENCES Pedido (cod_Pedido);


INSERT INTO Cardapio (categoria_cardapio, foto_Cardapio) VALUES
('Lanches','3f1c532ee523035f95fea1984397276d.jpg'),
('Sobremesas','777729620558329f772d3998031af644.jpg'), 
('Bebidas','8d7b8a2ca292044201146f26782ffd1a.jpg'), 
('Pratos','9752c0cf982211f0771946b653b803ec.jpg');
SELECT * FROM Cardapio;

INSERT INTO Item (nome_Item, preco_Item, descricao_Item, cod_Cardapio, foto_Item) values
('X-salada', 13.00, 'hambúrguer de carne bovina 100g, pâo de hambúrguer, salada, tomate e mussarela', 1, '7b4c618f83bacc5d24ba9673855db486.jpg'),
('X-egg', 14.50, 'hambúrguer de carne bovina 100g, pâo de hambúrguer, salada, tomate, mussarela e 2 ovos', 1, '2606da6d5e082d3145b51659c7d6e889.jpg'),
('Açai', 20.00, 'Açai na tigela 500ml, Acompanhamentos: 2 frutas, granola, leite em pó, leite condensado', 2, '905d3549f6be6dc19b86ac79c53ddc2d.jpg'),
('Bolo de brigadeiro', 7.00, 'Massa de chocolate com recheio e cobertura de brigadeiro e granulado de chocolate de pote de 250ml', 2, '16e65a2ddddbaa9be773f1057e86c1fb.jpg'),
('Coca-Cola', 6.00, 'Cola-cola 400ml', 3, 'f3580ae5eeddaa04d744704679a586a9.jpg'),
('Heineken', 12.00, 'Heineken 400ml', 3, '2aecc7e9ed2d33e259312f6da778fad1.jpg'),
('File Acebolado', 21.00, 'File Acebolado com arroz soltinho, feijão fresco, faroja e salada', 4, '3a63dbaece1242ec415c61904ad8bb81.jpg'),
('File Grelhado', 21.00, 'File Grelhado com arroz soltinho, feijão fresco, faroja e salada', 4, 'adada571f32b663cefbaad29ec7ce38e.jpg');
SELECT * FROM Item;

INSERT INTO Mesa (qr_Code, numero_Mesa) VALUES 
('qrcode1','Mesa 01'),
('qrcode2','Mesa 02'),
('qrcode3','Mesa 03'),
('qrcode4','Mesa 04'),
('qrcode5','Mesa 05');
SELECT * FROM Mesa;


INSERT INTO Pedido (observacao_Pedido, qr_Code, valor_total, status_Pedido) VALUES 
('X-SALADA SEM SALADA e COCA SEM GELO','qrcode1', 19.00,'Entregue'),
('X-EGG SEM OVO','qrcode2', 14.50,'Entregue'),
(NULL,'qrcode3',21.00,'Concluido'),
(NULL,'qrcode4',21.00,'Concluido'),
(NULL,'qrcode4',6.00,'Pendente'),
(NULL,'qrcode4',13.00,'Pendente');   
SELECT * FROM Pedido;

INSERT INTO ItemPedido (cod_Pedido, cod_Item, quantidade, valor_Item) VALUES 
(1,1,1,13.00),
(1,5,1,6.00),
(2,2,1,14.50),
(3,7,1,21.00),
(4,7,1,21.00),
(5,5,1,6.00),
(6,1,1,13.00);
SELECT * FROM ItemPedido;

INSERT INTO Funcionario (nome_Funcionario, cpf_Funcionario, telefone_Funcionario, cargo_Funcionario, email_Funcionario, senha) VALUES 
('Breno André Roberto Teixeira', '408.097.038-23', '(11) 98116-1538', 'Administrador', 'caioviniciusg.1000@gmail.com', '123'),
('Rafael Guilherme Matheus Ferreira', '585.746.378-58', '(11) 98761-3752', 'Garçom', 'rafaelguilherme@gmail.com', '123'),
('Carla Natália Porto', '956.669.328-10', '(11) 98911-6170', 'Cozinheiro', 'carlaporto@gmail.com', '123'),
('ALOK', '408.292.038-23', '(11) 98336-1538', 'Administrador', 'ALOK@gmail.com', '123');
SELECT * FROM Funcionario 
ORDER BY nome_Funcionario ASC;
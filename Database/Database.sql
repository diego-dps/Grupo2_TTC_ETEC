-- CRIANDO O BANCO DE DADOS
DROP DATABASE IF EXISTS tcc;
CREATE DATABASE IF NOT EXISTS tcc
default character set utf8
default collate utf8_general_ci;

use tcc; 

/*criando as tabelas*/
/*Tabela Cardapio*/
create table Cardapio(
cod_Cardapio int(100) unsigned not null auto_increment primary key,
categoria_Cardapio VARCHAR(100) NOT NULL,
foto_Cardapio VARCHAR(100)
);
/*Tabela Item*/
create table Item (
cod_Item int(100) not null auto_increment primary key,
cod_Cardapio int(100) unsigned not null,
nome_Item VARCHAR(100) NOT NULL,
descricao_Item VARCHAR(100) NOT NULL,
preco_Item varchar(20) NOT NULL,
Ativo tinyint(1) default 1 not null,
foto_Item VARCHAR(100) /*Utilização de Blob para armazenar a Imagem*/
);
/*Tabela Mesa*/
create table Mesa(
qr_Code VARCHAR(100) UNIQUE not null primary key,
numero_Mesa VARCHAR(100) NOT NULL,
chamada_mesa bit default 0
);
/*tabela Pedido*/
create table Pedido(
cod_Pedido INT(100) NOT NULL AUTO_INCREMENT primary key,
horario_Pedido timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
observacao_Pedido VARCHAR(200),
qr_Code VARCHAR(100) NOT NULL,
valor_total decimal(10,2), 
status_Pedido ENUM('Pendente','Concluido','Entregue') default 'Pendente'
);
/*tabela ItemPedido*/
create table ItemPedido(
cod_Item INT(100) not null,
cod_Pedido INT(100) NOT NULL,
quantidade INT(100) not null,
valor_Item decimal(10,2) NOT NULL,
foto_Item VARCHAR(100)
);
/*tabela Funcionario*/
create table Funcionario(
cod_Funcionario INT(100) UNSIGNED NOT NULL AUTO_INCREMENT primary key,
nome_Funcionario VARCHAR(100) NOT NULL,
cpf_Funcionario varchar(14) unique not null,
telefone_Funcionario varchar(16) unique not null,
cargo_Funcionario ENUM('Garçom','Cozinheiro','Administrador'),
email_Funcionario VARCHAR(100) unique NOT NULL,
Ativo tinyint(1) default 1 not null,
senha VARCHAR(50) NOT NULL
);

/*adicionando a chaves estrangeiras em suas respectivas tabelas*/
ALTER TABLE Item ADD CONSTRAINT FK_cod_Cardapio
FOREIGN KEY (cod_Cardapio)
REFERENCES Cardapio (cod_Cardapio)
ON DELETE CASCADE;

ALTER TABLE Pedido ADD CONSTRAINT FK_qrCode
FOREIGN KEY (qr_Code)
REFERENCES Mesa (qr_Code);

ALTER TABLE ItemPedido ADD CONSTRAINT FK_Item_Pedido/*as FK nao tem o mesmo nome pois o banco não permite nomes duplicados*/
FOREIGN KEY (cod_Item)
REFERENCES Item (cod_Item)
ON DELETE CASCADE;

ALTER TABLE ItemPedido ADD CONSTRAINT FK_codigo_Pedidos/*as FK nao tem o mesmo nome pois o banco não permite nomes duplicados*/
FOREIGN KEY (cod_Pedido)
REFERENCES Pedido (cod_Pedido);

-- CRIANDO O BANCO DE DADOS
DROP DATABASE IF EXISTS tcc;
CREATE DATABASE IF NOT EXISTS tcc
default character set utf8
default collate utf8_general_ci;

use tcc; 

/*criando as tabelas*/
/*Tabela Cardapio*/
CREATE TABLE Cardapio(
cod_Cardapio int(100) unsigned NOT NULL auto_increment PRIMARY KEY,
categoria_Cardapio VARCHAR(100) NOT NULL,
foto_Cardapio VARCHAR(100)
);
/*Tabela Item*/
CREATE TABLE Item (
cod_Item int(100) NOT NULL auto_increment PRIMARY KEY,
cod_Cardapio int(100) unsigned NOT NULL,
nome_Item VARCHAR(100) NOT NULL,
descricao_Item VARCHAR(100) NOT NULL,
preco_Item varchar(20) NOT NULL,
Ativo tinyint(1) default 1 NOT NULL,
foto_Item VARCHAR(100) /*Utilização de Blob para armazenar a Imagem*/
);
/*Tabela Mesa*/
CREATE TABLE Mesa(
qr_Code VARCHAR(100) UNIQUE NOT NULL PRIMARY KEY,
numero_Mesa VARCHAR(100) NOT NULL,
chamada_Mesa ENUM('1', '0') default '0' NULL
);
/*tabela Pedido*/
CREATE TABLE Pedido(
cod_Pedido INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY,
horario_Pedido timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
observacao_Pedido VARCHAR(200),
qr_Code VARCHAR(100) NOT NULL,
valor_total decimal(10,2), 
status_Pedido ENUM('Pendente','Concluido','Entregue') default 'Pendente'
);
//*tabela ItemPedido*/
CREATE TABLE ItemPedido(
cod_Item INT(100) NOT NULL,
cod_Pedido INT(100) NOT NULL,
quantidade INT(100) NOT NULL,
valor_Item decimal(10,2) NOT NULL,
observacao_Pedido VARCHAR(200) default 'Sem Observação',
foto_Item VARCHAR(100)
);
/*tabela Funcionario*/
CREATE TABLE Funcionario(
cod_Funcionario INT(100) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
nome_Funcionario VARCHAR(100) NOT NULL,
cpf_Funcionario varchar(14) unique NOT NULL,
telefone_Funcionario varchar(16) unique NOT NULL,
cargo_Funcionario ENUM('Garçom','Cozinheiro','Administrador'),
email_Funcionario VARCHAR(100) unique NOT NULL,
Ativo tinyint(1) default 1 NOT NULL,
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

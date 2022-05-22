drop database if exists EcoStore;
create database EcoStore;
use EcoStore;

create table Usuario(
	CodUsu int NOT NULL AUTO_INCREMENT,
    LoginS varchar(25),
    Nome varchar(25),
    DataNasc date,
    Senha varchar(100),
    CPF int,
    TipoUsuario varchar(10),
    primary key (CodUsu)
)
ENGINE = InnoDB;

create table Telefone(
	CodTel int NOT NULL AUTO_INCREMENT,
    CodUsu int NOT NULL,
    Numtel varchar(20),
    primary key (CodTel)
)
ENGINE = InnoDB;


create table Endereco(
	CodEnd int NOT NULL AUTO_INCREMENT,
    CodUsu int NOT NULL,
    Endereco varchar(50),
    CEP int,
    Numero int,
    Complemento varchar(25),
	primary key (CodEnd)
)
ENGINE = InnoDB;


create table Vendedor(
	CodVend int NOT NULL AUTO_INCREMENT,
    CodUsu int NOT NULL,
    NomeEmp varchar(50),
    Descricao varchar(255),
    primary key (CodVend)
)
ENGINE = InnoDB;


create table Produto(
	CodProduto int NOT NULL AUTO_INCREMENT,
    #CodVend int NOT NULL,
    Validade date,
    Descricao varchar(255),
    ValorUni double,
    Foto mediumblob,
    primary key (CodProduto)
)
ENGINE = InnoDB;


create table Venda(
	CodVenda int NOT NULL AUTO_INCREMENT,
    CodUsu int NOT NULL,
    CodProduto int,
    FormPag varchar(25),
    Quantidade int,
    DataPag date,
    primary key (CodVenda)
)
ENGINE = InnoDB;


#alter table Usuario
#add foreign key (Endereco) references Endereco(CodEnd),
#add foreign key (Telefone) references Telefone(CodTel);


alter table Telefone
add foreign key (CodUsu) references Usuario(CodUsu);

alter table Endereco
add foreign key (CodUsu) references Usuario(CodUsu);

alter table Vendedor
add foreign key (CodUsu) references Usuario(CodUsu);

#alter table Produto
#add foreign key (CodVend) references Vendedor(CodVend);

alter table Venda
add foreign key (CodUsu) references Usuario(CodUsu),
add foreign key (CodProduto) references Produto(CodProduto);

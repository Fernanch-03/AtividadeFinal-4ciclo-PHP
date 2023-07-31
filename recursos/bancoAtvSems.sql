create database quiz;

use quiz;

create table usuario(
	cd_usuario INT auto_increment primary key,
    nm_usuario 	VARCHAR(50) NOT NULL,
    nm_email VARCHAR(50) NOT NULL,
    cd_senha VARCHAR(30) NOT NULL
);

create table historico(
	cd_historico int auto_increment primary key,
    cd_usuario int,
    nm_teste VARCHAR(50) NOT NULL,
    vl_pontuacao INT NOT NULL,
    FOREIGN KEY (cd_usuario) REFERENCES usuario (cd_usuario)
);
insert into usuario values (1,'a','b','c');
select * from usuario;


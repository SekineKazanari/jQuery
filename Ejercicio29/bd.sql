create database Ajax;
use Ajax;

Create table usuario(idUsuario int primary key not null AUTO_INCREMENT,
                            email varChar(45),
                            pass varChar(45),
                            anio varChar(45)) ENGINE = INNODB;
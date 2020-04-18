-- 1. Crear tabla

create database IF NOT EXISTS  notas_master;

use notas_master;

Create table usuarios(
    id int(11) auto_increment not null,
    nombre VARCHAR(100) not null,
    apellido VARCHAR(100) not null,
    email VARCHAR(100) default 'desconocido',
    pass VARCHAR(100) not null,
    estado varchar(1) check ('A' and 'I'),
    fecha date,
    constraint  pk_usuario primary key(id),
    constraint  uq_email unique(email)    
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial


CREATE TABLE  notas
(
    id int(255) auto_increment not null,
    usuario_id  int(255) not null,
    titulo  varchar(100) not null,
    descripcion  MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT pk_entrada PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id) 
    ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDb;

show tables;


-- INSERT USUARIOS
insert into usuarios (id,nombre,apellido,email,pass,fecha) 
values(null,'Victor','Robles','victor@robles.com','1234','2019-05-01');

insert into usuarios (id,nombre,apellido,email,pass,fecha) 
values(null,'Oscar','Martinez','oscar@hotmail.com','1234','2018-06-01');

insert into usuarios (id,nombre,apellido,email,pass,fecha) 
values(null,'Roque','Gonzalez','roque@gmail.com','1234','2017-02-01');

insert into usuarios (id,nombre,apellido,email,pass,fecha) 
values(null,'Ever','Rodriguez','ever@hotmail.com','1234','2020-12-20');

insert into usuarios (id,nombre,apellido,email,pass,fecha) 
values(null,'Edgar','Benitez','edgar@hotmail.com','1234','2020-12-23');


--INSERT NOTAS
INSERT INTO notas VALUES(null,1,'Nota 1', 'libro especial','2020-04-23');
INSERT INTO notas VALUES(null,2,'Nota 2', 'libro segunda edicion','2020-05-23');
INSERT INTO notas VALUES(null,3,'Nota 3', 'libro tercera edicion','2020-08-23');

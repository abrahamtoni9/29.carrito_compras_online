-- 1. Crear tabla

create database IF NOT EXISTS  blog_master;

use blog_master;

Create table usuarios(
    id int(11) auto_increment not null,
    nombre VARCHAR(100) not null,
    apellido VARCHAR(100) not null,
    email VARCHAR(100) default 'desconocido',
    pass VARCHAR(100) not null,
    -- estado varchar(1) check ('A' and 'I'),
    fecha date,
    constraint  pk_usuario primary key(id),
    constraint  uq_email unique(email)    
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial

CREATE TABLE  categorias
(
    id int(255) auto_increment not null,
    nombre  varchar(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial

CREATE TABLE  entradas
(
    id int(255) auto_increment not null,
    usuario_id  int(255) not null,
    categoria_id  int(255) not null,
    titulo  varchar(100) not null,
    descripcion  MEDIUMTEXT,
    fecha date not null,
    CONSTRAINT pk_entrada PRIMARY KEY(id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id) 
    ON DELETE NO ACTION ON UPDATE NO ACTION,
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
    ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDb;
 --SET NULL, SET DEFAULT, CASCADE
--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial




CREATE TABLE  notas
(
    id int(255) auto_increment not null,
    titulo  varchar(255) not null,
    descripcion  MEDIUMTEXT,
    color   varchar(255),
    CONSTRAINT pk_nota PRIMARY KEY(id)
)ENGINE=InnoDb;



show tables;
desc usuarios;
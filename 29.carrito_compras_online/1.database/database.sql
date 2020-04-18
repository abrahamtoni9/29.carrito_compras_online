-- 1. Crear tabla

create database IF NOT EXISTS  tienda_master;

use tienda_master;

Create table usuarios(
    id          int(11) auto_increment not null,
    nombre      VARCHAR(100) not null,
    apellido    VARCHAR(100),
    email       VARCHAR(100) default 'desconocido',
    pass        VARCHAR(100) not null,
    -- estado varchar(1) check ('A' and 'I'),
    rol         varchar(20),
    imagen      varchar(255),
    constraint  pk_usuario primary key(id),
    constraint  uq_email unique(email)    
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial

CREATE TABLE  categorias
(
    id          int(255) auto_increment not null,
    nombre      varchar(100),
    CONSTRAINT pk_categorias PRIMARY KEY(id)
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial


CREATE TABLE  productos
(
    id            int(255) auto_increment not null,
    categoria_id  int(255) not null,
    nombre        varchar(100),
    descripcion   TEXT,
    precio        float(100,2) not null,
    stock         int(255) not null,
    oferta        varchar(2),
    fecha         date not null,
    imagen        varchar(255),
    CONSTRAINT pk_productos PRIMARY KEY(id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
    ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial

CREATE TABLE  pedidos
(
    id            int(255) auto_increment not null,
    usuario_id    int(255) not null,
    provincia     varchar(100),
    localidad     varchar(100),
    direccion     varchar(255),
    coste         float(200,2) not null,
    estado        varchar(20) not null,
    fecha         date,
    hora          time,
    CONSTRAINT pk_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_pedido_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
    ON DELETE NO ACTION ON UPDATE NO ACTION
)ENGINE=InnoDb;--estamos indicando el motor o bd de mysql y nos permite tener  integridad referencial



CREATE TABLE  lineas_pedidos
(
    id            int(255) auto_increment not null,
    pedido_id     int(255) not null,
    producto_id   int(255) not null,
    unidades int(255) NOT NULL,
    CONSTRAINT pk_lineas_pedidos PRIMARY KEY(id),
    CONSTRAINT fk_linea_pedido FOREIGN KEY(pedido_id) REFERENCES pedidos(id) 
    ON DELETE CASCADE ON UPDATE NO ACTION,
    CONSTRAINT fk_linea_producto FOREIGN KEY(producto_id) REFERENCES productos(id)
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



--INSERT

--USUARIO
insert into usuarios (id,nombre,apellido,email,pass,rol,imagen) values(null,'Admin','Admin','admin@admin.com','contrasena', 'admin' , null);

insert into usuarios (id,nombre,apellido,email,pass,rol,imagen) 
values(null,'Victor','Robles','victor@robles.com','1234', 'A' ,'2019-05-01');

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



--CATEGORIAS
INSERT INTO categorias values(null,'Manga corta');
INSERT INTO categorias values(null,'Tirante');
INSERT INTO categorias values(null,'Sudaderas');
INSERT INTO categorias values(null,'Manga larga');


--PRODUCTOS
insert into productos (id,categoria_id,nombre,descripcion,precio,stock,fecha,imagen) 
values(null, 1, 'Box logo supreme','Box logo supreme bb', 100, 20,'2020-12-23', null);


--AGREGAR CAMPO A PEDIDO DETALLE
ALTER TABLE lineas_pedidos ADD unidades int(255) NOT NULL;

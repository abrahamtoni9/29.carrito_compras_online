--Insertar


--USUARIO
insert into usuarios (id,nombre,apellido,email,pass,estado,fecha) 
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
INSERT INTO categorias values(null,'Accion');
INSERT INTO categorias values(null,'Rol');
INSERT INTO categorias values(null,'Deportes');
INSERT INTO categorias values(null,'Plataformas');


--NOTAS
 



insert into entradas values (null, 21,3, 'Novedades de Sony', 'Review de Sony', '2020-12-23' );
insert into entradas values (null, 22,3, 'Novedades de Mario card', 'Review de Mario card', '2020-02-12' );
insert into entradas values (null, 22,2, 'Novedades de Guerra de las galaxias', 'Review de Guerra de las galaxias', '2020-02-03');
insert into entradas values (null, 24,3, 'Novedades de star war', 'Review de star war', '2020-02-05');
insert into entradas values (null, 25,2, 'Novedades de DBZ', 'Review de DBZ', '2020-02-09');

insert into entradas values (null, 23,4, 'Novedades de 007', 'Review de 007', '2020-02-11');
insert into entradas values (null, 23,4, 'Novedades de CRASH', 'Review de CRASH ', '2020-02-13');
insert into entradas values (null, 24,4, 'Novedades de CRASH', 'Review de CRASH ', '2020-02-13');
insert into entradas values (null, 20,3, 'Novedades', 'Review', '2020-06-23');

update  entradas set fecha = '2020-02-24' where id = 9; 
update  entradas set fecha = '2020-02-24' where id = 9; 
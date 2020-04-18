
--Trae registros SI existe registro de usuario en la tabla entradas 
select * from usuarios where id in( select usuario_id from entradas );


--Trae registro SI no existe registro de usuario en la tabla entradas 
select * from usuarios where id not in( select usuario_id from entradas );


--queremos traer todos los registros que no estan en la tabla entradas 
select * from usuarios u where id not in( select usuario_id from entradas e where e.usuario_id = u.id );


--si queremos saber el ese registro con ese id existe en la otra tabla
select * from usuarios u where id not in( select usuario_id from entradas e where e.usuario_id = 1 );


--queremos traer el registro de usuario que contenga GTA de titulo en la tabla entradas
select * from usuarios u where id  in( select usuario_id from entradas e where e.usuario_id = 1 and e.titulo like "%GTA%" );

select * from usuarios u where id in( select usuario_id from entradas e where e.usuario_id = 1 and e.titulo = 'Novedades de GTA V');



--EJERCICIOS

--Sacar todas las entradas de la categoria 'accion' utilizando su nombre

select titulo from entradas where categoria_id in (select id from categorias where nombre = 'Accion') ; 

-- Mostrar las categorias con mas de 3 entradas 

select * from categorias where id in (select categoria_id from entradas group by categoria_id having count(categoria_id)> 3);

 --otro ejemplo de eselect, me devuelve varios registro
select * from categorias where (select count(categoria_id) from entradas group by categoria_id) > 3;

-- Mostrar los usuarios que crearon una entrada un martes

select * from usuarios id in ( select usuario_id from entradas where dayname(fecha) = 'Tuesday');
select * from usuarios id in ( select usuario_id from entradas where dayname(fecha) = 'Tuesday') ;
select * from usuarios id in ( select usuario_id from entradas where dayofweek(fecha) = 3) ;

-- Mostrar el nombre del usuario que tenga mas entrada

--in se usa para varios registros y el '=' para un registro, en este se tiene que usar = porque usamos la funcion limit
select * from usuarios where id =(select usuario_id from entradas group by usuario_id order by count(id) desc);
 
-- Mostrar las categorias sin entradas

select * from categorias u where id not in( select categoria_id from entradas e);



select * from entradas e , usuarios u , categorias c where  e.usuario_id = u.id and e.categoria_id = c.id;
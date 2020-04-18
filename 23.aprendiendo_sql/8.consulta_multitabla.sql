-- Mostrar las entradas con el nombre del autor y el nombre  de la categoria
select e.id, e.titulo, u.nombre 'Autor', c.nombre  'Categoria' 
from entradas e, usuarios u, categorias c
where u.id = e.usuario_id and c.id = e.categoria_id;


--Mostrar el nombre de las categorias de alado cuantas entradas tienen
select c.nombre, count(c.nombre) from entradas e, categorias c
where  c.id = e.categoria_id group by c.nombre;

-- Mostrar el email de los usuarios  y alado  cuantas entradas  tienen
select u.email 'Autor', count(e.usuario_id) 
from entradas e, usuarios u
where u.id = e.usuario_id group by u.email;


--comprobar con este select 
select u.email 'Autor'
from entradas e, usuarios u
where u.id = e.usuario_id;


--INNER JOIN 
select e.id , e.titulo , u.nombre 'Auto' , c.nombre 'Categoria' from entradas e 
left join usuarios u on  e.usuario_id = u.id 
left join categorias c on  e.categoria_id = c.id;

--LEFT JOIN (trae todos los registros de la izquierda y los que coinciden en el interior de la relacion)
select c.nombre , count(e.id) from categorias c 
left join entradas e on  e.categoria_id = c.id 
group by e.categoria_id;


select c.nombre , count(e.id) from entradas e  
left join categorias c on  e.categoria_id = c.id 
group by e.categoria_id;

--TRAE TODOS LOS REGISTROS QUE SE ENCUENTRA A LA DERECHA (CATEGOIRAS) INCLUSO SI NO EXISTE EN LA TABLA ENTRADA
select e.id, c.nombre  from entradas e  
RIGHT join categorias c on  e.categoria_id = c.id order by e.id;


----TRAE TODOS LOS REGISTROS QUE SE ENCUENTRA A LA IZQUIERDA (EMTRADA) SIN INCLUIR LOS REGISTRO QUE NO EXISTEN EN LA TABLA CATEGORIAS
select e.id, c.nombre, e.titulo, e.descripcion, e.fecha  from entradas e  
LEFT join categorias c on  e.categoria_id = c.id order by e.id;


--RIGHT JOIN

select c.nombre , count(e.id) from entradas e  
right join categorias c on  e.categoria_id = c.id 
group by e.categoria_id;
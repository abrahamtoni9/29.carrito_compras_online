
--crear vistas
create or replace view vs_entradas_nombres as
select c.nombre, count(c.nombre) from entradas e, categorias c
where  c.id = e.categoria_id group by c.nombre;


--borrar vista;
drop view vs_entradas_nombres;
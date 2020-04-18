
update vendedores  set sueldo = 50000 where id = 5;
update vendedores  set sueldo = 60000 where id = 7;
update vendedores  set sueldo = 80000 where id = 8;
update vendedores  set comision = 0.5 where sueldo >= 50000;


--aumentar el precio de los coches

update coches set precio =  precio * 1.05;


--sacar todos los vendedores cuya fecha de alta sean posterior a 1 de julio de 2018

update vendedores set fecha = '2017-05-03' where id= 2;
update vendedores set fecha = '2016-05-03' where id= 1;
update vendedores set fecha = '2015-05-03' where id= 6;
update vendedores set fecha = '2013-05-03' where id= 7;
select * from vendedores where fecha >= '2018-07-01';


--Mostrar todos los vendedores con su nombre  y el nro de dias que llevan trabajando en el consecioneario

select nombre , DATEDIFF(CURDATE(),fecha) from vendedores; 


--sacar el nombre y los apellidos  de los vendedores en una misma columna, su fecha de registro y el dia  de la semana en la que se registraron 

select  concat(nombre,' ', apellido) as 'Nombre y Apellido', fecha, DAYNAME(fecha) from  vendedores;

update vendedores  set sueldo = 50000 where id = 5;
update vendedores  set sueldo = 60000 where id = 7;
update vendedores  set sueldo = 80000 where id = 8;
update vendedores  set comision = 0.5 where sueldo >= 50000;


--aumentar el precio de los coches

update coches set precio =  precio * 1.05;


--sacar todos los vendedores cuya fecha de alta sean posterior a 1 de julio de 2018

update vendedores set fecha = '2017-05-03' where id= 2;
update vendedores set fecha = '2016-05-03' where id= 1;
update vendedores set fecha = '2015-05-03' where id= 6;
update vendedores set fecha = '2013-05-03' where id= 7;
select * from vendedores where fecha >= '2018-07-01';


--Mostrar todos los vendedores con su nombre  y el nro de dias que llevan trabajando en el consecioneario

select nombre , DATEDIFF(CURDATE(),fecha) from vendedores; 


--sacar el nombre y los apellidos  de los vendedores en una misma columna, su fecha de registro y el dia  de la semana en la que se registraron 

select  concat(nombre,' ', apellido) as 'Nombre y Apellido', fecha, DAYNAME(fecha) from  vendedores;

update vendedores  set sueldo = 50000 where id = 5;
update vendedores  set sueldo = 60000 where id = 7;
update vendedores  set sueldo = 80000 where id = 8;
update vendedores  set comision = 0.5 where sueldo >= 50000;


--aumentar el precio de los coches

update coches set precio =  precio * 1.05;


--sacar todos los vendedores cuya fecha de alta sean posterior a 1 de julio de 2018

update vendedores set fecha = '2017-05-03' where id= 2;
update vendedores set fecha = '2016-05-03' where id= 1;
update vendedores set fecha = '2015-05-03' where id= 6;
update vendedores set fecha = '2013-05-03' where id= 7;
select * from vendedores where fecha >= '2018-07-01';


--Mostrar todos los vendedores con su nombre  y el nro de dias que llevan trabajando en el consecioneario

select nombre , DATEDIFF(CURDATE(),fecha) from vendedores; 


--sacar el nombre y los apellidos  de los vendedores en una misma columna, su fecha de registro y el dia  de la semana en la que se registraron 

select  concat(nombre,' ', apellido) as 'Nombre y Apellido', fecha, DAYNAME(fecha) from  vendedores;


--visualizar todos los coches en cuya marca exista la letra "A" y cuyo modleo empieze con "F"

select * from  coches  where marca like "%a%" and modelo like 'F%';
select * from  coches  where marca like "%a%" or modelo like 'F%';



--visualizar todos los cargos  y el nro de vendedores  que hay en cada grupo
select cargo , count(id) from vendedores group by cargo order by count(id) desc;



--sacar la media de los salarios entre los vendedores por grupo
select CEIL(AVG(sueldo)), g.nombre, grupo_id, g.ciudad from vendedores v
inner join  grupos  g on g.id = v.grupo_id
group by grupo_id;

select AVG(ROUND(sueldo),2), g.nombre, grupo_id, g.ciudad from vendedores v
inner join  grupos  g on g.id = v.grupo_id
group by grupo_id;




--visualizar las unidades totales vendidas  de cada coche a cada cliente mostrando el nombre del coche, nombre de cliente y la suma de las unidades

select e.coche_id,c.modelo , e.cliente_id, cl.nombre, e.cantidad, sum(cantidad) as 'cantidad vendida' from encargos e
inner join coches c on c.id = e.coche_id
inner join clientes cl on cl.id = e.cliente_id
group by cliente_id; 

select e.coche_id,c.modelo , e.cliente_id, cl.nombre, e.cantidad, sum(cantidad) as 'cantidad vendida' from encargos e
inner join coches c on c.id = e.coche_id
inner join clientes cl on cl.id = e.cliente_id
group by e.cliente_id, e.coche_id; 



--Mostrar los clientes que hicieron mas encargos y mostrar cuanto hicieron

select e.cliente_id, cl.nombre , count(e.cliente_id) as 'Cantidad de encargos' from encargos e
inner join clientes cl on cl.id = e.cliente_id
group by e.cliente_id order by 3 desc limit 2;




--obtener listado de clientes atendidos por el vendedor "David Lopez"
select * from clientes c 
inner join vendedores v on v.id = c.vendedor_id
where v.nombre = 'David' and v.apellido = 'Lopez';

select * from clientes c, vendedores v where vendedor_id = (select id from vendedores where nombre = 'David' and apellido = 'Lopez')


--obtener listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'

select e.id as codigo, e.cantidad , c.nombre, co.modelo, e.fecha from encargos e 
inner join clientes c on c.id = e.cliente_id
inner join coches co on co.id = e.coche_id
where cliente_id in (select id from clientes where nombre = 'Fruteria Antonia Inc');


--listar los clientes que han hecho algun encargo del coche 'Mercedez Ranchera'

select e.id, e.cliente_id, c.nombre, e.coche_id, co.modelo from encargos e
inner join coches co on co.id = e.coche_id
inner join clientes c on c.id = e.cliente_id
where e.coche_id in (select id from coches where  modelo = 'Mercedez Ranchera');


select *  from clientes where id in (select cliente_id from encargos where coche_id in(select id from coches where modelo LIKE '%Mercedez Ranchera'));

select *  from clientes where id in (select cliente_id from encargos where coche_id in(select id from coches where modelo ='Mercedez Ranchera'));


select c.nombre, e.cantidad, e.id, e.cliente_id, e.coche_id from clientes c
left join encargos e on e.cliente_id = c.id;


--Obtener los vendedores con dos o mas clientes
select * from vendedores where id in (select vendedor_id from clientes group by vendedor_id having count(vendedor_id) >= 2);



--selecciona el grupo en el que trabaja el vendedor con mayor salario y mostrar el nombre del grupo

select nombre from grupos where id in (select grupo_id from vendedores where sueldo =(select max(sueldo) from vendedores));

select nombre from grupos where id in (select grupo_id from vendedores order by sueldo asc);


--obtener los nombre y ciudades de lo clientes con encargo de 3  unidades en adelante

select id, nombre , ciudad from clientes where id in (select cliente_id from encargos where cantidad >= 3);


--listar los encargos con los nombres del coche, el nombre del cliente y el nombre de la ciudad, pero unicamente cuando sea barcelona

select e.id , co.modelo , c.nombre , c.ciudad from encargos e 
 inner join coches co on co.id = e.coche_id
 inner join clientes  c on c.id = e.cliente_id
 where c.ciudad = 'Barcelona';


 select e.id 'Codigo encargo' , c.nombre , c.ciudad, c.id 'Codigo cliente', e.coche_id 'Codigo coche', co.modelo
 from clientes c
 left join encargos e on e.cliente_id = c.id
 left join coches co on e.coche_id = co.id;

 select e.id 'Codigo encargo' , c.nombre , c.ciudad, c.id 'Codigo cliente', e.coche_id 'Codigo coche', co.modelo
 from clientes c
 right join encargos e on e.cliente_id = c.id
 right join coches co on e.coche_id = co.id;



 --sacar los vendedores que tienen jefe y sacar el nombre del jefe 

    select v1.id 'Codigo del vendedor', concat(v1.nombre,' ', v1.apellido ) as 'Vendedor', v2.id 'Codigo del jefe', concat(v2.nombre,' ', v2.apellido ) as 'Jefe'
    from vendedores v1
    inner join vendedores v2 on v1.jefe  = v2.id; --HACEMOS LA RELACION DE JEFE CON LA MISMA TABLA



    --Visualizar los nombres de los clientes y la cantidad de encargos realizados , incluyendo los que no hayan realizados los encargos
    
    select c.nombre , count(e.id) from clientes c
    left join encargos e on c.id = e.cliente_id
    group by 1;


    --mostrar todos los vendedores y el nombre de cliente se deben mostrar tengan o no clientes

    select v.nombre, v.apellido, count(c.id), c.id 'Codigo de cliente' from vendedores v
    left join clientes c on c.vendedor_id = v.id
    group by v.id;



    --   Crear una vista llamada  vendedoresa que incluira todos los vendedores del grupo que se llame 'Vendedores A'

    Create or replace view  vendedoresA as 
    select * from  vendedores where grupo_id in (select id from  grupos  where nombre = 'Vendedores A');



    --Obtener los coches con mas unidades vendidas 
    select * from coches where id in (select coche_id from encargos where cantidad in(select max(cantidad) from encargos));
--Mostrar nombre y apellido  de todos los usuarios  registrados en 2019

select nombre , apellido from usuaurios  where year(fecha) = 2019;

--Mostrar nombre y apellido  de todos los usuarios  que no se registraron en 2019


select nombre , apellido from usuaurios  where year(fecha) != 2019 or isnull(fecha);

--sacar todos los registros  de la tabla usuario cuyo anio sea par
select * from usuaurios  where (year(fecha) % 2 = 0);

--sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras  y que se hayan registrado antes de 2020, y mostrar el nombre en mayuscula
select UPPER(nombre), apellido from usuaurios where LENGTH(nombre) > 5 and YEAR(fecha) < 2020;


select * from usuaurios where limit 3,2;
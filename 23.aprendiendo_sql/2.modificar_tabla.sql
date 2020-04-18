-- 1. modificar tabla

--renombar la tabla
alter table usuarios rename to usuarios_renombrado; 

--renombrar la columna
alter table usuarios_renombrado  change apellido  apellidos varchar(100) not null; 
desc usuarios_renombrado;

--modificar el tipo de datos o su longuitud
alter table usuarios_renombrado modify apellidos char(50) not null;

--anadir columna a una tabla
alter table usuarios_renombrado add website varchar(100) null;

--anadir restriccion  a columna
alter table usuarios_renombrado add constraint uq_email unique(email);

--borrar una columna
alter table usuarios_renombrado drop website;

drop table if exists ususarios;
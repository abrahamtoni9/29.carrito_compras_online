
CREATE DATABASE IF NOT EXISTS  blog_master;

USE blog_master;

CREATE TABLE grupos (
    id      INT(10) AUTO_INCREMENT NOT NULL,
    nombre  VARCHAR(100) NOT NULL,
    ciudad  VARCHAR(100),
    CONSTRAINT pk_grupos_id PRIMARY KEY(id)    
)ENGINE= InnoDB;

CREATE TABLE coches (
    id      INT(10) AUTO_INCREMENT NOT NULL,
    modelo  VARCHAR(100) NOT NULL,
    marca  VARCHAR(100),
    precio  INT(255) NOT NULL,
    stock  INT(255) NOT NULL,
    CONSTRAINT pk_coches_id PRIMARY KEY(id)    
)ENGINE= InnoDB;


CREATE TABLE vendedores (
    id         INT(10) AUTO_INCREMENT NOT NULL,
    grupo_id   INT(10) NOT NULL,
    jefe       INT(10) ,
    nombre     VARCHAR(100) NOT NULL,
    apellido   VARCHAR(150) ,
    cargo      VARCHAR(50) ,
    fecha      DATE ,
    sueldo     FLOAT(20,2),
    comision   FLOAT(10,2),
    CONSTRAINT pk_vendedores_id PRIMARY KEY(id) ,   
    CONSTRAINT pk_vendedores_grupo_id FOREIGN KEY (grupo_id) REFERENCES grupos(id) ,   
    CONSTRAINT pk_vendedores_jefe FOREIGN KEY (jefe) REFERENCES vendedores(id)    
)ENGINE= InnoDB;


CREATE TABLE clientes (
    id              INT(10) AUTO_INCREMENT NOT NULL,
    vendedor_id     INT(10),
    nombre          VARCHAR(50) NOT NULL,
    ciudad          VARCHAR(100),
    gastado         FLOAT(5,2) ,
    fecha           date,
    CONSTRAINT pk_clientes_id PRIMARY KEY(id),
    CONSTRAINT pk_clientes__vendedores_vendedor_id FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE= InnoDB;


CREATE TABLE encargos (
    id              INT(10) AUTO_INCREMENT NOT NULL,
    cliente_id      INT(10),
    coche_id        INT(10) NOT NULL,
    cantidad        INT(100),
    fecha           DATE,
    CONSTRAINT pk_encargos_id PRIMARY KEY(id),
    CONSTRAINT pk_encargos_clientes_cliente_id FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT pk_encargos_coches_coche_id FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE= InnoDB;

CREATE TABLE usuarios (
    id              INT(10) AUTO_INCREMENT NOT NULL,
    nombre          varchar(100) NOT NULL,
    apellido        varchar(100) NOT NulL,
    email           VARCHAR(100),
    pass            VARCHAR(100),
    fecha           DATE,
    CONSTRAINT pk_usuarios_id PRIMARY KEY(id)
)ENGINE= InnoDB;

CREATE TABLE categorias (
    id              INT(10) AUTO_INCREMENT NOT NULL,
    nombre          varchar(100) not null,
    CONSTRAINT pk_categorias_id PRIMARY KEY(id)
)ENGINE= InnoDB;

CREATE TABLE entradas (
    id              INT(10) AUTO_INCREMENT NOT NULL,
    ususario_id     INT(10),
    categoria_id    INT(10),
    titulo          varchar(150),
    descripcion     varchar(150),
    fecha           DATE,
    CONSTRAINT pk_entradas_id PRIMARY KEY(id),
    CONSTRAINT pk_entradas_usuarios_id FOREIGN KEY(ususario_id) REFERENCES ususarios(id),
    CONSTRAINT pk_entradas_categoria_id FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE= InnoDB;



--INSERT

--COCHES
INSERT INTO coches VALUES(null,'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES(null,'Soat Panda', 'Soat', 10000, 10);
INSERT INTO coches VALUES(null,'Mercedez Ranchera', 'Mercedez Benz', 32000, 24);
INSERT INTO coches VALUES(null,'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES(null,'Lamborgini Aventador', 'Lamborgini', 17000, 2);
INSERT INTO coches VALUES(null,'Ferrari Spider', 'Ferrari', 245000, 80);


--GRUPOS
INSERT INTO grupos VALUES(null,'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES(null,'Directores Mecanico', 'Madrid');
INSERT INTO grupos VALUES(null,'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES(null,'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES(null,'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES(null,'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES(null,'Vendedores C', 'Santiago de Compostela');


--VENDEDORES
INSERT INTO vendedores VALUES(null, 1, null,'David','Lopez','Responsable de tienda',CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES(null, 1, 1,'Fran','Martinez','Ayudante de tienda',CURDATE(), 30000, 2;
INSERT INTO vendedores VALUES(null, 2, null,'Nelson','Sanchez','Responsable de tienda',CURDATE(), 30000, 5);
INSERT INTO vendedores VALUES(null, 2, 3,'Jesus','Lopez','Ayudante de tienda',CURDATE(), 30000, 6);
INSERT INTO vendedores VALUES(null, 3, null,'Victor','Lopez','Mecanico jefe',CURDATE(), 30000, 2);
INSERT INTO vendedores VALUES(null, 4, null,'Antonio','Lopez','Vendedor de recambio',CURDATE(), 30000, 8);
INSERT INTO vendedores VALUES(null, 5, null,'Salvador','Lopez','Vendedor experto',CURDATE(), 30000, 2);
INSERT INTO vendedores VALUES(null, 6, null,'Joaquin','Lopez','Ejecutivo de cuentas',CURDATE(), 30000, 1);
INSERT INTO vendedores VALUES(null, 6, 8,'Luis','Lopez','Ayudante de tienda',CURDATE(), 30000, 10);


update vendedores set jefe = 5 where id = 8;
update vendedores set jefe = 2 where id = 3;
update vendedores set jefe = 5 where id = 7;
update vendedores set jefe = 6 where id = 1;
update vendedores set jefe = 4 where id = 3;


--CLIENTES

INSERT INTO clientes VALUES(null,1,'Construcciones Diaz Inc','Alcobendas',24000,curdate());
INSERT INTO clientes VALUES(null,1,'Fruteria Antonia Inc','FuenLabrada',40000,curdate());
INSERT INTO clientes VALUES(null,1,'Imprenta Martinez Inc','Barcelona',3200,curdate());
INSERT INTO clientes VALUES(null,1,'Jesus Colchones Inc','El Prat', 9600,curdate());
INSERT INTO clientes VALUES(null,1,'Bar Pepe Inc','Valencia',17000,curdate());
INSERT INTO clientes VALUES(null,1,'Tienda PC Inc','Murcia',24500,curdate());
INSERT INTO clientes VALUES(null,4,'Verduleria Inc','Cartagena',5000,curdate());




--ENCARGOS
INSERT INTO encargos VALUES(null,1,1,2,curdate());
INSERT INTO encargos VALUES(null,2,2,4,curdate());
INSERT INTO encargos VALUES(null,3,3,1,curdate());
INSERT INTO encargos VALUES(null,4,3,3,curdate());
INSERT INTO encargos VALUES(null,5,5,1,curdate());
INSERT INTO encargos VALUES(null,6,6,1,curdate());
INSERT INTO encargos VALUES(null,6,3,1,curdate());
INSERT INTO encargos VALUES(null,6,5,1,curdate());



 select nombre , cantidad from encargos e, clientes c where e.cliente_id = c.id;

 select nombre , cantidad , modelo from encargos e, clientes c, coches co where e.cliente_id = c.id and e.coche_id = co.id ;
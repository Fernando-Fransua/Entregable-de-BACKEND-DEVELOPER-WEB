CREATE TABLE clientes (
    idcliente serial PRIMARY KEY,
    nombres VARCHAR(50),
    apellidos VARCHAR(50),
    email VARCHAR(50),
    celular VARCHAR(50),
    empresa VARCHAR(50)
);
insert into clientes (nombres, apellidos, email, celular, empresa) values ('hola', 'hola', 'hola', 'hola','hola')
select * from clientes

CREATE TABLE proyectos (
	idproyecto seriaL PRIMARY KEY,
	nombre VARCHAR (50),
	empresa VARCHAR (50),
	fechainicio VARCHAR (50),
	fechaentrega VARCHAR (50)
);

ALTER TABLE proyectos ADD COLUMN descripcion VARCHAR (50);
select * from proyectos
insert into proyectos (nombre, empresa, fechainicio, fechaentrega, descripcion) values ('hola', 'hola', 'hola', 'hola','hola')


CREATE TABLE asignacion (
    idasignacion serial PRIMARY KEY,
	    idproyecto integer NOT NULL,
    idcliente integer NOT NULL,
    FOREIGN KEY (idproyecto) REFERENCES proyectos(idproyecto),
    FOREIGN KEY (idcliente) REFERENCES clientes(idcliente)
);
select * from asignacion

CREATE TABLE usuarios(
	idusuario serial PRIMARY KEY,
	email varchar (50),
	contra varchar (12)
);



create table clientes(
    dat_id int primary key AUTO_INCREMENT,
    dat_documento varchar(40),
    dat_nombre varchar(40),
    dat_apellidos varchar(40),
    dat_email varchar(50),
    dat_fecha date,
    dat_celular varchar(20),
    dat_telefono varchar (20),
    dat_estilo varchar(200)
);

create table empleados(
    dat_id int primary key AUTO_INCREMENT,
    dat_documento varchar(40),
    dat_nombre varchar(40),
    dat_apellidos varchar(40),
    dat_email varchar(50),
    dat_fecha date,
    dat_celular varchar(20),
    dat_telefono varchar (20),
    dat_experiencia varchar(200),
    dat_contraseña varchar(20)
);
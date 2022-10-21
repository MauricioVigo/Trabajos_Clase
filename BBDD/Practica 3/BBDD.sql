create database pruebas;
create table profesor(
dni int primary key,
nombre varchar(20),
direccion varchar(50),
telefono varchar(10)    
);

create table alumno(
expediente varchar(15) primary key,
nombre varchar(20),
apellidos varchar(25),
fecha_nacimiento date
);

create table modulo(
codigo int primary key,
nombre varchar(20),
dni_profesor int references profesor(dni)
);

create table cursa(
expediente_alumno varchar(15) references alumno(expediente),
codigo_modulo int references modulo(codigo)
);

create user alumno@localhost identified by "1234";
grant select on pruebas.alumno to alumno@localhost;
grant select on pruebas.cursa to alumno@localhost;
grant select on pruebas.modulo to alumno@localhost;

create user profesor@localhost identified by "1234";
grant select on pruebas.modulo to profesor@localhost;
grant select on pruebas.cursa to profesor@localhost;
grant select on pruebas.alumno to profesor@localhost;

create user profesorasir@localhost identified by "1234";
grant select,insert,drop on pruebas.modulo to profesorasir@localhost;
grant select,insert,drop on pruebas.cursa to profesorasir@localhost;
grant select,insert,drop on pruebas.alumno to profesorasir@localhost;

create user adminasir@localhost identified by "1234";
grant all on *.* to adminasir@localhost;

create user superasir@localhost identified by "1234";
grant all on *.* to superasir@localhost;
grant grant option on *.* to superasir@localhost;

create user ocasional@localhost identified by "1234"
grant select on *.* to ocasional@localhost;
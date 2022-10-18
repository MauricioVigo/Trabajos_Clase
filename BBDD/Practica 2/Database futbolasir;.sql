create database futbolasir;
use futbolasir;
create table jugadores(
    id_jugador int,
    nombre varchar(50),
    fecha_nac date,
    demarcacion varchar(50),
    internacional int,
    id_equipo int
);

create table equipos(
    id_equipo int,
    nombre varchar(50),
    estadio varchar(50),
    aforo int,
    ano_fundacion int,
    ciudad varchar(50)
);

create table partidos(
    id_equipo_casa int
    id_equipo_fuera int,
    fecha date,
    goles_casa int
    goles_fuera int,
    observaciones varchar(200)
);
create table goles(
    id_equipo_casa int,
    id_equipo_fuera int,
    minuto int,
    descripcion varchar(200),
    id_jugador int
);

insert into jugadores values(1,"IKER","80-5-9","PORTERO",50,1);
insert into jugadores values(2,"RONALDO","74-7-7","DELANTERO",80,1);
insert into jugadores values(3,"RAMOS","98-9-9","CENTROCAMPISTA",50,1);
insert into jugadores values(4,"NEYMAR","99-3-3","DELANTERO",50,2);

insert into equipos values(1,"Real Madrid","Santiago Bernabeu",80000,1950,"Madrid",);
insert into equipos values(2,"F.C. Barcelona","Camp Nou",70000,1948,"Barcelona","");
insert into equipos values(3,"Valencia C.F","Mestalla",90000,1952,"Valencia","");
insert into equipos values(4,"Atletico de Madrid","Vicente Calderon",55000,1945,"Madrid","");

insert into partidos values(1,2,"3-3-14",2,1,null,null);
insert into partidos values(1,3,"4-4-14",3,1,null,null);
insert into partidos values(2,3,"3-4-14",0,4,null,null);

insert into goles values(1,2,35,"De falta",2);
insert into goles values(1,2,70,null,2);
insert into goles values(1,2,88,null,4);
insert into goles values(1,3,5,null,3);
insert into goles values(1,3,10,"De penalti",2);


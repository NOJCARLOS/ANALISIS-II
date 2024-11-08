use sistemaincidentes;
select * from pais;
insert into pais(name, description, state) values('Guatemala','pais guatemala','Activo');
insert into pais(name, description, state) values('Estados Unidos','Pais de los estados unidos americanos','Activo');
insert into pais(name, description, state) values('Mexico','pais de los estados unidos mexicanos','Activo');
select * from departamento;
insert into departamento(id_pais, name, description, state) values('1', 'Sacatepéquez','departamento de Sacatepéquez, Región Central','Activo');
insert into departamento(id_pais, name, description, state) values('1', 'Chimantenango','departamento de Chimaltenango, Región Central','Activo');
insert into departamento(id_pais, name, description, state) values('1', 'Guatemala','Ciudad capital, Región Central','Activo');
select * from municipio;
insert into municipio(id_departamento, name, description, state) values('1', 'Antigua Guatemala','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Alotenango','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'San Miguel Dueñas','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'San Antonio Aguas Calientes','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Santa Catarina Barahona','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Ciudad Vieja','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Jocotenango','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Pastores','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Sumpango','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Santo Domingo Xenacoj','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Santiago Sacatepéquez','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'San Bartolome Milpas Altas','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'San Lucas Sacatepéquez','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Santa Lucia Milpas Altas','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Magdalena Milpas Altas','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('1', 'Santa María de Jesus','departamento de Sacatepequez, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('3', 'Guatemala','Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('3', 'San Juan Sacatepéquez','Departamento de Guatemala, Región Central','Activo');
insert into municipio(id_departamento, name, description, state) values('3', 'Mixco','Departamento de Guatemala, Región Central','Activo');

delete FROM MUNICIPIO WHERE ID=16;
select * from ubicacion;
SELECT
    ubicacion.id,
    ubicacion.numero_oficina,  -- Agrega aquí las demás columnas de la tabla ubicacion que necesites
    municipio.name
FROM
    ubicacion
INNER JOIN municipio ON ubicacion.id_municipio = municipio.id;
delete FROM ubicacion where id=15;

insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(224, 1, 'Avenida del espiritu santo No. 6',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(258, 2, 'Primer Cantón, Calle Real frente al Calvario, municipio de Alotenango, departamento de Sacatepéquez',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(18, 3, '5ta. Avenida 0-75, Zona 1, San Miguel Dueñas, Sacatepéquez.',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(259, 4, '2a. Avenida 4-27 "A", Zona 2, San Antonio Aguas Calientes, Sacatepéquez.',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(260, 5, 'Calle Principal Casa número. 36, Zona 2, Santa Catarina Barahona, Sacatepéquez.',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(257, 6, '3a. Avenida 4-59, Zona 4, Ciudad Vieja, Sacatepéquez.',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(242, 7, 'Calle Real Colonia El Pedregal lote No.4 zona 2, Jocotenango, Sacatepéquez',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(233, 8, '3a. Ave. No. 3-99 zona 3 Cantón La Vega, municipio de Pastores, departamento de Sacatepéquez',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(249, 9, '3a. Ave. No. 3-99 zona 3 Cantón La Vega, municipio de Pastores, departamento de Sacatepéquez',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(549, 1, 'Hospital Nacional Pedro de Betancourth',true,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(195, 18, 'Calzada Roosevelt 13-46 zona 7 ciudad de guatemala',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(246, 19, 'Calle principal, san juan 1',false,'Activo');
insert into ubicacion(numero_oficina, id_municipio, address, is_auxiliatura, state) values(250,20, 'Parque central mixco Guatemala',false,'Activo');
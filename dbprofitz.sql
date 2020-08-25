/*Script base de datos*/

/*cliente*/
create table departamento(
	id_departamento_cliente serial primary key not null,
	departamento_cliente varchar(32) not null,
	precio_departamento integer not null
);

create table clientes(
	id_cliente serial primary key not null,
	nombre_cliente varchar(64) not null,
	apellido_cliente varchar(64) not null,
	correo_cliente varchar(32) not null,
	telefono integer not null,
	direccion_cliente varchar(128) not null,
	contraseña_cliente varchar(32) not null,
	id_departamento_cliente serial not null references departamento(id_departamento_cliente)
);


/*fin de cliente*/

/*todo lo relacionado con la tabla productos*/

create table tipo_producto(
	id_tipo_producto serial primary key not null,
	clase_producto varchar(32) not null
);

create table marcas(
	id_marca serial primary key not null,
	nombre_marca varchar(64) not null,
	imagen_marca varchar(16) not null
);

create table imagen_producto(
	id_imagen_producto serial primary key not null,
	nombre_imagen varchar(32) not null,
	url varchar(128) not null
);

create table productos(
	id_producto serial primary key not null,
	nombre_producto varchar(64) not null,
	precio_producto integer not null,
	descuento integer not null,
	cantidad_productos integer not null,
	estado_producto varchar(32) not null,
	id_marca serial not null references marcas(id_marca),
	id_tipo_producto serial not null references tipo_producto(id_tipo_producto),
	id_imagen_producto serial not null references imagen_producto(id_imagen_producto)
);



/*fin de todo lo relacionado con la tabla productos*/

/*inicio tabla pedido*/

create table calificacion(
	id_calificacion serial primary key not null,
	comentario varchar(128),
	calificacion integer,
	fecha_calificacion timestamptz DEFAULT Now(),
	id_producto serial not null references productos(id_producto),
	id_cliente serial not null references clientes(id_cliente)
);


create table pedido(
	id_pedido serial primary key not null,
	fecha_compra date() not null,
	estado_pedido varchar(32) not null,
	id_cliente serial not null references clientes(id_cliente)
);

create table detalle_pedido(
	id_detalle_pedido serial primary key not null,
	precio_total integer not null,
	id_pedido serial not null references pedido(id_pedido),
	id_producto serial not null references productos(id_producto)
);

/*fin tabla detalle_pedido*/

/*todo lo relacionado a usuario*/

create table tipo_usuario(
	id_tipo_usuario serial primary key not null,
	tipo_usuario varchar(64) not null
);

create table usuario(
	id_usuario serial primary key not null,
	nombre_usuario varchar(64) not null,
	apellido_usuario varchar(64) not null,
	correo_usuario varchar(64) not null,
	telefono int not null,
	contraseña_usuario varchar(32) not null,
	codigo_empresarial int not null,
	id_tipo_usuario serial not null references tipo_usuario(id_tipo_usuario)
);



/*fin de todo lo relacionado a usuario*/

/*Inicio de todo lo relacionado sobre mantenimiento*/

create table tipo_producto_m(
	id_tipo_producto_m serial primary key not null,
	tipo_producto_m varchar(32),
	precio_mantenimiento integer not null
);



create table mantenimiento(
	id_mantenimiento serial primary key not null,
	fecha_registro datetime() not null,
	fecha_entrega datetime() not null,
	estado_mantenimiento varchar(32) not null
);


create table detalle_mantenimiento(
	id_detalle_mantenimiento serial primary key not null,
	id_tipo_producto_m serial not null references tipo_producto_m(id_tipo_producto_m),
	id_mantenimiento serial not null references mantenimiento(id_mantenimiento),
	id_cliente serial not null references clientes(id_cliente)
);




/*Fin de todo lo relaciona con mantenimiento*/




/*Insert base de datos*/
insert into departamento (departamento_cliente, precio_departamento)
values ('Ahuachapán',10.00),
('Sonsonate',9.00),
('Santa Ana',9.00),
('La Libertad',7.00),
('Chalatenango',7.00),
('San Salvador',5.00),
('Cuscatlán',7.00),
('La Paz',7.00),
('Cabañas',8.00),
('San Vicente',8.00),
('Usulután',10.00),
('San Miguel',10.00),
('Morazán',10.00),
('La unión',10.00)

insert into clientes (nombre_cliente, apellido_cliente, correo_cliente, telefono, direccion_cliente, contraseña_cliente, id_departamento_cliente)
values ('Arturo','German','arturo@gmail.com',78451236,'cerca de todos', 'cualquiercosa',1),
        ('Josue','Lacayo','lacayo@gmail.com',78741441,'cerca de todos','cualquiercosa',2),
        ('Carlos','Herrera','carlos@gmail.com',98653274,'cerca de todos','cualquiercosa',3),
        ('Jorge','Lacayo','jorge@gmail.com',78741441,'cerca de todos','cualquiercosa',4),
        ('Manuel','Herrera','manuel@gmail.com',98653274,'cerca de todos','cualquiercosa',5),
        ('Hector','Lacayo','hector@gmail.com',78741441,'cerca de todos','cualquiercosa',6),
        ('Saul','Herrera','saul@gmail.com',98653274,'cerca de todos','cualquiercosa',7),
        ('Sergio','Lacayo','sergio@gmail.com',78741441,'cualquiercosa','cerca de todos',8),
        ('Laura','Herrera','laura@gmail.com',98653274,'cerca de todos','cualquiercosa',9),
        ('Angela','Lacayo','angela@gmail.com',78741441,'cerca de todos','cualquiercosa',10),
        ('Nicole','Herrera','nicole@gmail.com',98653274,'cerca de todos','cualquiercosa',11),
        ('Rodrigo','Lacayo','rodrigo@gmail.com',78741441,'cerca de todos','cualquiercosa',12),
        ('Emily','Herrera','emily@gmail.com',98653274,'cerca de todos','cualquiercosa',13),
        ('Jesus','Lacayo','jesus@gmail.com',78741441,'cerca de todos','cualquiercosa',14),
        ('Leonardo','Herrera','leonardo@gmail.com',98653274,'cerca de todos','cualquiercosa',1)


/*Productos*/
insert into tipo_producto (clase_producto)
values('Bicicleta'),
	('Caminadora'),
	('Bicicleta estacionaria'),
	('Eliptica'),
	('Mini Gym')

insert into marcas (nombre_marca, imagen_marca)
values('Trek','Imagen'),
('NordiTrack','Imagen'),
('Pro-Form','Imagen'),
('Nu Sportia','Imagen'),
('Corsario','Imagen'),
('Orbea','Imagen'),
('Golds Gym','Imagen'),
('Weslo','Imagen'),
('K6','Imagen'),
('Wider','Imagen')

insert into imagen_producto(nombre_imagen,url)
values('Caminadora','https://i.linio.com/p/ced80b717667d3ec8115b938b082e211-product.jpg'),
('Bicicleta estacionaria','https://i.linio.com/p/ced80b717667d3ec8115b938b082e211-product.jpg'),
('Eliptica','https://i.linio.com/p/ced80b717667d3ec8115b938b082e211-product.jpg'),
('Bicicleta','https://i.linio.com/p/ced80b717667d3ec8115b938b082e211-product.jpg'),
('Mini Gym','https://i.linio.com/p/ced80b717667d3ec8115b938b082e211-product.jpg')

insert into productos (nombre_producto, precio_producto, descuento, cantidad_productos, estado_producto,id_marca, id_tipo_producto, id_imagen_producto)
VALUES ('BMX',100.00,0,10,'Stock',1,2,1),
        ('Banco press',10.00,0,14,'Stock',2,1,1),
        ('Prensa de piernas',180.00,0,13,'Proximamente',3,4,2),
        ('Máquina de dorsales',200.00,0,16,'Stock',5,3,2),
        ('Bicicletas estáticas',160.00,0,6,'Stock',4,1,3),
        ('Ciclo Indoor',100.00,0,5,'Stock',2,4,1),
        ('Elípticas',150.00,0,9,'Stock',5,3,2),
        ('Cintas de correr',150.00,0,13,'Stock',2,1,4),
        ('Máquinas de remo',150.00,0,18,'Stock',2,4,5),
        ('Bicicleta cross country',150.00,0,12,'Stock',3,5,1),
        ('Bicicleta de enduro Mountain',150.00,0,5,'Stock',4,1,2),
        ('Bicicleta de descenso',150.00,0,18,'Stock',5,1,2),
        ('Fat bike',150.00,0,17,'Stock',3,4,2),
        ('E-bike',150.00,0,16,'Stock',4,1,2),
        ('Bicicleta de pista',150.00,0,2,'Stock',5,3,2),
        ('Bicicleta de carretera',150.00,0,1,'Stock',4,1,5),
        ('Bicicleta inglesa',150.00,0,4,'Stock',3,4,1),
        ('Bicicleta holandesa',150.00,0,7,'Stock',2,3,4),
        ('Bicicleta plegable',150.00,0,9,'Stock',4,3,1),
        ('Bicicleta playera o cruiser',150.00,0,13,'Stock',2,2,1)
/*Fin de productos*/

/*Inicio detalle pedido*/
insert into calificacion(comentario, calificacion, fecha_calificacion, id_producto, id_cliente)
values('Excelente producto', 5,’2001/01/01’,1,2),
('La entrega se retraso 1 hora', 4,’2001/01/01’,2,2),
('Tuve que pedir un reemplazo', 3, ’2001/01/01’,3,3),
('Muy bueno', 5, ’2001/01/01’,4,4),
('Malisimo', 2, ’2001/01/01’,5,5)


/**************************Falta pedidos*******************************/	

/*****************************Falta detalle pedido*******************************************/

/*Fin detalle pedido*/

/*Inicio usuario*/
insert into tipo_usuario(tipo_usuario)
values('Empleado'),
	('Administrador')

insert into usuario(nombre_usuario, apellido_usuario,correo_usuario, telefono, contraseña_usuario, codigo_empresarial,id_tipo_usuario)
values('Fernando', 'Artiga', 'fernando@gmail.com', 78549348, '12345678', 487924, 1),
('Pedro', 'Lopez', 'pedro@yopmail.com', 74548954, '12345678', 465687, 1),
('Rodrigo', 'Rodriguez', 'rodrigo@gmail.com', 61016449, '12345678', 632157, 1),
('César', 'Muñoz', 'cesar@outlook.com', 65489694, '12345678', 135424, 1),
('Hernán', 'Hidalgo', 'hernan@hotmail.com', 40004859, '12345678', 220502, 1),
('Roberto', 'Parada', 'roberto@gmail.com', 82659432, '12345678', 982486, 2)
/*Fin usuario*/

/*Inicio detalle mantenimiento*/
insert into tipo_producto_m(tipo_producto_m, precio_mantenimiento)
values('Bicicleta', 20.00),
('Caminadora', 16.00),
('Elíptica',10.00),
('Bicicleta estacionaria',15.00),
('Mini Gym',15.00)

insert into mantenimiento(fecha_registro, fecha_entrega, estado_mantenimiento)
values('2020/01/01', '2020/01/01', 'En curso'),
('2001/01/01', '2001/01/01', 'No iniciado'),
('2001/01/01', '2001/01/01', 'Finalizado'),
('2001/01/01', '2001/01/01', 'Finalizado'),
('2020/01/01', '2020/01/01', 'No iniciado')

insert into detalle_mantenimiento(id_tipo_producto_m, id_mantenimiento, id_cliente)
values(1,1,1),
(2,2,2),
(3,3,3),
(4,4,4),
(5,5,5)

/*Fin detalle mantenimiento*/
insert into pedido(fecha_compra,estado_pedido,id_cliente)
values ('2001/01/01','pendiente',1),
		('2001/01/01','pendiente',2),
		('2001/01/01','pendiente',3),
		('2001/01/01','pendiente',4),
		('2001/01/01','pendiente',5),
		('2001/01/01','pendiente',6),
		('2001/01/01','pendiente',7),
		('2001/01/01','pendiente',8),
		('2001/01/01','pendiente',9),
		('2001/01/01','pendiente',10),
		('2001/01/01','pendiente',11),
		('2001/01/01','pendiente',12),
		('2001/01/01','pendiente',13),
		('2001/01/01','pendiente',14),
		('2001/01/01','pendiente',15)
		
		
		
insert into detalle_pedido (id_pedido,id_producto,precio_total)
values (41,2,50),
		(41,5,50),
		(41,18,50),
		(41,19,50),
		(41,2,50),
		(42,5,50),
		(42,5,50),
		(42,8,50),
		(42,9,50),
		(42,19,50),
		(43,7,50),
		(43,2,50),
		(43,1,50),
		(43,3,50),
		(43,5,50),
		(44,9,50),
		(44,8,50),
		(44,5,50),
		(44,2,50),
		(44,15,50),
		(45,17,50),
		(45,12,50),
		(45,13,50),
		(45,14,50),
		(45,20,50),
		(46,8,50),
		(46,5,50),
		(46,11,50),
		(46,7,50),
		(46,4,50),
		(47,2,50),
		(47,5,50),
		(47,18,50),
		(47,19,50),
		(47,2,50),
		(48,5,50),
		(48,5,50),
		(48,8,50),
		(48,9,50),
		(48,19,50),
		(49,7,50),
		(49,2,50),
		(49,1,50),
		(49,3,50),
		(49,5,50),
		(50,9,50),
		(50,8,50),
		(50,5,50),
		(50,2,50),
		(50,15,50)
		
		
		(28,17,50),
		(28,12,50),
		(21,13,50),
		(21,14,50),
		(22,20,50),
		(22,8,50),
		(22,5,50),
		(22,11,50),
		(23,7,50),

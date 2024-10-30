-- Active: 1730294947984@@127.0.0.1@3306
drop table if exists clientes;
drop table if exists productos;
drop table if exists pedidos;
drop table if exists detalles;

create table clientes(
    id_cliente integer primary key,
    nombre varchar(25) not null,
    apellido varchar(25) not null,
    direccion varchar(25) not null,
    ciudad varchar(25) not null,
    email varchar(25) not null,
    telefono varchar(25) not null
);

create table productos(
    id_producto integer primary key,
    nombre varchar(25) not null,
    codigo_ref varchar(25) not null,
    precio int not null
);

create table pedidos(
    id_pedido integer primary key,
    fecha date not null,
    cliente_id int not null references clientes(id_cliente)
);

create table detalles(
    id_detalle integer primary key,
    pedido_id int not null references pedidos(id_pedido),
    producto_id int not null references productos(id_productos),
    cantidad int not null
);
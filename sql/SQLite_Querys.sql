-- Active: 1730509130368@@127.0.0.1@3306
-- chequear version sqlite
select sqlite_version();

-- traer todo de la tabla clientes
select * from clientes;

-- traer todo de la tabla productos
select * from productos;

-- traer todo de la tabla pedidos
select * from pedidos;

-- traer todo de la tabla detalles
select * from detalles;

-- traer todos los campos de la tabla clientes que sean de la ciudad de Bs As
select * from clientes where ciudad = "Buenos Aires";

-- traer todos los campos de la tabla productos que contengan la palabra Shorts en su nombre
select * from productos where nombre like "%Shorts%";

-- traer la cantidad de clientes que tiene la base de datos
SELECT id_cliente, COUNT(*) AS cantidad_clientes
FROM clientes
GROUP BY id_cliente;

-- traer todos los datos del cliente id 10
SELECT * FROM clientes WHERE id_cliente = 10;

-- traer todos los datos de los detalles que tengan mas de 2 del mismo producto
SELECT * FROM detalles WHERE cantidad > 2;

-- traer los pedidos que se hayan efectuado despues del 01 01 2024
SELECT * FROM pedidos WHERE fecha >= '2024-01-01';

-- traer las compras efectuadas por los clientes con su nombre apellido y ademas que producto compraron y que cantidad
SELECT clientes.id_cliente, clientes.nombre, clientes.apellido, productos.nombre, detalles.cantidad
from clientes
inner join pedidos
on clientes.id_cliente = pedidos.cliente_id
inner join detalles
on pedidos.id_pedido = detalles.pedido_id
inner join productos
on detalles.producto_id = productos.id_producto;

-- traer la cantidad total de productos vendidos individualmente por cada producto
select productos.nombre, sum(detalles.cantidad) as unidades_vendidas
from productos
inner JOIN detalles
on productos.id_producto = detalles.producto_id
GROUP BY productos.id_producto;
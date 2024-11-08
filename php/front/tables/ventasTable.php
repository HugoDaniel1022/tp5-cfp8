<?php
include_once "php/connector/connector.php";
$connector = new Connector();

if(isset($_REQUEST['buscar'])){
    $registros = $connector->getConnection()->query("select productos.nombre as nombre_producto, sum(detalles.cantidad) as unidades_vendidas from productos inner JOIN detalles on productos.id_producto = detalles.producto_id where productos.nombre like '%{$_REQUEST['buscar']}%' GROUP BY productos.id_producto ORDER BY unidades_vendidas DESC");
}
else{
    $registros = $connector->getConnection()->query("select productos.nombre as nombre_producto, sum(detalles.cantidad) as unidades_vendidas from productos inner JOIN detalles on productos.id_producto = detalles.producto_id GROUP BY productos.id_producto ORDER BY unidades_vendidas DESC");
}
foreach($registros as $registro){
    echo ("<tr><td>{$registro['nombre_producto']}</td><td>{$registro['unidades_vendidas']}</td></tr>");
}
?>
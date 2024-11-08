<?php
include_once 'php/connector/connector.php';
if ((isset($_REQUEST['cantidad']) && $_REQUEST['cantidad'] != 0)) {
    $connector = new Connector();
    $connector->getConnection()->exec("insert into detalles (pedido_id, producto_id, cantidad) values ('{$_REQUEST['pedido_id']}','{$_REQUEST['producto_id']}','{$_REQUEST['cantidad']}')");
    echo 'Se ingreso un nuevo detalle!';
} else {
    echo 'Ingrese un nuevo detalle!';
}
?>
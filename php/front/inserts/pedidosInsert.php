<?php
include_once 'php/connector/connector.php';
if ((isset($_REQUEST['fecha']) && $_REQUEST['fecha'] != '') && ($_REQUEST['fecha'] > date('Y-m-d', strtotime('-5 days')) && $_REQUEST['fecha'] <= date("Y-m-d"))) {
    $connector = new Connector();
    $connector->getConnection()->exec("insert into pedidos (fecha, cliente_id) values ('{$_REQUEST['fecha']}','{$_REQUEST['cliente_id']}')");
    echo 'Se ingreso un nuevo pedido!';
} else {
    echo 'Ingrese un nuevo pedido!';
}
?>
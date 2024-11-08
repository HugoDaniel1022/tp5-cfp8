<?php
include_once 'php/connector/connector.php';
if ((isset($_REQUEST['nombre']) && $_REQUEST['nombre'] != '') && (isset($_REQUEST['cod_ref']) && $_REQUEST['cod_ref'] != '') && (isset($_REQUEST['precio']) && $_REQUEST['precio'] != 0)) {
    $connector = new Connector();
    $connector->getConnection()->exec("insert into productos (nombre, codigo_ref, precio) values ('{$_REQUEST['nombre']}','{$_REQUEST['cod_ref']}','{$_REQUEST['precio']}')");
    echo 'Se ingreso un nuevo producto!';
} else {
    echo 'Ingrese un nuevo producto!';
}
?>
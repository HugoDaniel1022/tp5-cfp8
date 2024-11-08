<?php
include_once 'php/connector/connector.php';
if ((isset($_REQUEST['nombre']) && $_REQUEST['nombre'] != '') && (isset($_REQUEST['apellido']) && $_REQUEST['apellido'] != '') && (isset($_REQUEST['direccion']) && $_REQUEST['direccion'] != '') && (isset($_REQUEST['ciudad']) && $_REQUEST['ciudad'] != '') && (isset($_REQUEST['email']) && $_REQUEST['email'] != '') && (isset($_REQUEST['telefono']) && $_REQUEST['telefono'] != '')){
    $connector = new Connector();
    $connector->getConnection()->exec("insert into clientes (nombre, apellido, direccion, ciudad, email, telefono) values ('{$_REQUEST['nombre']}', '{$_REQUEST['apellido']}', '{$_REQUEST['direccion']}', '{$_REQUEST['ciudad']}', '{$_REQUEST['email']}', '{$_REQUEST['telefono']}')");
    echo 'Se ingreso un nuevo cliente!';
} else {
    echo 'Ingrese un nuevo cliente!';
}
?>
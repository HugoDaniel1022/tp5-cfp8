<?php
include_once 'php/connector/connector.php';
if ((isset($_REQUEST['nombre']) && $_REQUEST['nombre'] != '') && (isset($_REQUEST['codigo_ref']) && $_REQUEST['codigo_ref'] != '') &&(isset($_REQUEST['precio']) && $_REQUEST['precio'] != '')) {
    $nombre = $_REQUEST['nombre'];
    $codigo_ref = $_REQUEST['codigo_ref'];
    $precio = $_REQUEST['precio'];
    $campos = "nombre, codigo_ref, precio";
    $values = "'" . $nombre . "','" . $codigo_ref . "','" . $precio . "'";
    $sql = "insert into productos ($campos) values ($values_t)";
    $connector=new Connector();
    $connector->getConnection()->exec($sql);
    echo 'Se ingreso un nuevo producto!';
} else {
    echo 'Ingrese un nuevo producto!';
}
?>
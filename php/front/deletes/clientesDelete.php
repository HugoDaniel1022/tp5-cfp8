<?php

include_once "php/connector/connector.php";

if(isset($_REQUEST['id_cliente'])){
    $connector = new Connector();
    $connector->getConnection()->exec("delete from clientes where id_cliente = {$_REQUEST['id_cliente']}");
    $registros = $connector->getConnection()->query('select * from clientes');
}

?>
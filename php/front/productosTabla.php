<?php

include_once "php/connector/connector.php";
$connector = new Connector();
$registros = $connector->getConnection()->query('select * from productos');
foreach($registros as $registro){
    echo ("<tr><td>{$registro['id_producto']}</td><td>{$registro['nombre']}</td><td>{$registro['codigo_ref']}</td><td>{$registro['precio']}</tr>");
}

?>
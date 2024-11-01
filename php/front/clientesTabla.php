<?php

include_once "php/connector/connector.php";
$connector = new Connector();
$registros = $connector->getConnection()->query('select * from clientes');
foreach($registros as $registro){
    echo ("<tr><td>{$registro['id_cliente']}</td><td>{$registro['nombre']}</td><td>{$registro['apellido']}</td><td>{$registro['direccion']}</td><td>{$registro['ciudad']}</td><td>{$registro['email']}</td><td>{$registro['telefono']}</td></tr>");
}

?>
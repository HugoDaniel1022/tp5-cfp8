<?php
include_once "php/connector/connector.php";
$connector=new Connector();
$registros=$connector->getConnection()->query("select * from clientes");
foreach ($registros as $registro) {
    echo "<option value='{$registro['id_cliente']}'>{$registro['id_cliente']}, {$registro['nombre']}, {$registro['apellido']}, {$registro['email']}</option><br>";
}
?>
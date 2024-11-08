<?php
include_once "php/connector/connector.php";
$connector=new Connector();
$registros=$connector->getConnection()->query("select * from productos");
foreach ($registros as $registro) {
    echo "<option value='{$registro['id_producto']}'>{$registro['id_producto']}, {$registro['codigo_ref']}, {$registro['precio']}</option><br>";
}
?>
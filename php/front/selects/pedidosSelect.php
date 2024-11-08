<?php
include_once "php/connector/connector.php";
$connector=new Connector();
$registros=$connector->getConnection()->query("select * from pedidos");
foreach ($registros as $registro) {
    echo "<option value='{$registro['id_pedido']}'>{$registro['id_pedido']}, {$registro['fecha']}, {$registro['cliente_id']}</option><br>";
}
?>
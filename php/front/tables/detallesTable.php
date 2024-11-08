<?php
include_once "php/connector/connector.php";
$connector = new Connector();
if(isset($_REQUEST['buscar'])){
    $registros = $connector->getConnection()->query("select * from detalles where producto_id like '{$_REQUEST['buscar']}'");
}
else{
    $registros = $connector->getConnection()->query('select * from detalles');
}

foreach($registros as $registro){
    echo ("<tr><td>{$registro['id_detalle']}</td><td>{$registro['pedido_id']}</td><td>{$registro['producto_id']}</td><td>{$registro['cantidad']}</td><td><form><input type='hidden' name='id_detalle' value='{$registro['id_detalle']}'><button type='submit' class='btn btn-danger'>Borrar</button></form></td></tr>");
}
?>
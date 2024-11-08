<?php

include_once "php/connector/connector.php";
$connector = new Connector();
if(isset($_REQUEST['buscar'])){
    $registros = $connector->getConnection()->query("select * from pedidos where cliente_id == '{$_REQUEST['buscar']}'");
}
else{
    $registros = $connector->getConnection()->query('select * from pedidos');
}

foreach($registros as $registro){
    echo ("<tr><td>{$registro['id_pedido']}</td><td>{$registro['fecha']}</td><td>{$registro['cliente_id']}</td><td><form><input type='hidden' name='id_pedido' value='{$registro['id_pedido']}'><button type='submit' class='btn btn-danger'>Borrar</button></form></td></tr>");
}

?>
<?php

include_once "php/connector/connector.php";

if(isset($_REQUEST['id_detalle'])){
    $connector = new Connector();
    $connector->getConnection()->exec("delete from detalles where id_detalle = {$_REQUEST['id_detalle']}");
    // $registros = $connector->getConnection()->query('select * from pedidos');
    // foreach($registros as $registro){
    //     echo ("<tr><td>{$registro['id_pedido']}</td><td>{$registro['fecha']}</td><td>{$registro['cliente_id']}</td><td><form><input type='hidden' name='id_pedido' value='{$registro['id_pedido']}'><button type='submit' class='btn btn-danger'>Borrar</button></form></td></tr>");
    // }
}

?>
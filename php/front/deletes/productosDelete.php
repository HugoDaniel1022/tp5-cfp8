<?php

include_once "php/connector/connector.php";

if(isset($_REQUEST['id_producto'])){
    $connector = new Connector();
    $connector->getConnection()->exec("delete from productos where id_producto = {$_REQUEST['id_producto']}");
    // $registros = $connector->getConnection()->query('select * from productos');
    // foreach($registros as $registro){
    //     echo ("<tr><td>{$registro['id_producto']}</td><td>{$registro['nombre']}</td><td>{$registro['codigo_ref']}</td><td>{$registro['precio']}</td><td><form><input type='hidden' name='id_producto' value='{$registro['id_producto']}'><button type='submit' class='btn btn-danger'>Borrar</button></form></td></tr>");
    // }
}

?>
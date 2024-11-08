<?php

include_once "php/connector/connector.php";
$connector = new Connector();
if(isset($_REQUEST['buscar'])){
    $registros = $connector->getConnection()->query("select * from productos where nombre like '%{$_REQUEST['buscar']}%'");
}
else{
    $registros = $connector->getConnection()->query('select * from productos');
}

foreach($registros as $registro){
    echo ("<tr><td>{$registro['id_producto']}</td><td>{$registro['nombre']}</td><td>{$registro['codigo_ref']}</td><td>{$registro['precio']}</td><td><form><input type='hidden' name='id_producto' value='{$registro['id_producto']}'><button type='submit' class='btn btn-danger'>Borrar</button></form></td></tr>");
}

?>
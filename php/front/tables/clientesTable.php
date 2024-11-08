<?php

include_once "php/connector/connector.php";
$connector = new Connector();
if(isset($_REQUEST['buscar'])){
    $registros = $connector->getConnection()->query("select * from clientes where nombre like '%{$_REQUEST['buscar']}%'");
}
else{
    $registros = $connector->getConnection()->query('select * from clientes');
}

foreach($registros as $registro){
    echo ("<tr><td>{$registro['id_cliente']}</td><td>{$registro['nombre']}</td><td>{$registro['apellido']}</td><td>{$registro['direccion']}</td><td>{$registro['ciudad']}</td><td>{$registro['email']}</td><td>{$registro['telefono']}</td><td><form><input type='hidden' name='id_cliente' value='{$registro['id_cliente']}'><button type='submit' class='btn btn-danger'>Borrar</button></form></td></tr>");
}

?>
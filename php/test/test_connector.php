<?php
include_once '../connector/connector.php';

echo '-- Inicio de Test Connector --<br>';
$connector=new Connector();
$sql="select sqlite_version()";
try{
    $registros = $connector->getConnectionTest()->query($sql);
    echo 'Conexión exitosa!<br>';
    foreach($registros as $row){
        echo 'Se conecto a '.$row[0].'<br>';
    }
}catch(Exception $e){
    echo 'Error de conexión2!<br>';
    echo $e.'<br>';
}


// $nombre = 'Campera jeje';
// $codigo_ref = '0123';
// $precio = 123;
// $values = "'" . $nombre . "','" . $codigo_ref . "','" . $precio . "'";
// $sql="insert into productos (nombre, codigo_ref, precio) values ($values)";
// $connector->getConnection()->exec($sql);

$sql2 = 'select * from productos';
$registros = $connector->getConnectionTest()->query($sql2);
foreach($registros  as $registro){
    echo ("<tr><td>{$registro['id_producto']}</td><td>{$registro['nombre']}</td><td>{$registro['codigo_ref']}</td><td>{$registro['precio']}</tr><br>");
}


?>
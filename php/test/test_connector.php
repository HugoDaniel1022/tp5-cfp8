<?php
include_once '../connector/connector.php';

echo '-- Inicio de Test Connector --<br>';
$connector=new Connector();
$sql="select sqlite_version()";
try{
    $registros = $connector->getConnection()->query($sql);
    echo 'Conexión exitosa!<br>';
    foreach($registros as $row){
        echo 'Se conecto a '.$row[0].'<br>';
    }
}catch(Exception $e){
    echo 'Error de conexión2!<br>';
    echo $e.'<br>';
}
echo '-- Fin de Test Connector --<br>';


?>
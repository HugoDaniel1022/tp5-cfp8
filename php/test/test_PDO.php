<?php

$myPDO = new PDO('sqlite:../../data/tienda.db');
$result = $myPDO->query("select sqlite_version()");
echo $result->rowCount().'<br>';  
foreach($result as $row){
    print $row[0] . "\n";
}
?>
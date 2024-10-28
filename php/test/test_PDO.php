<?php

//http://localhost/tp5-cfp8/php/test/test_PDO.php
    
// sqlite
$myPDO = new PDO('sqlite:../../data/tienda.db');
$result = $myPDO->query("select sqlite_version()");

// mariaDB localhost
//$myPDO = new PDO(
//    'mysql:host=localhost;dbname=colegio',
//    'root',
//    '');
//$result = $myPDO->query("select version()");   

//DB4free
// $myPDO = new PDO(
//     'mysql:host=db4free.net;dbname=basegeneral',
//     'basegeneral',
//     'basegeneral');
// $result = $myPDO->query("select version()"); 

echo $result->rowCount().'<br>';        //0
foreach($result as $row){
    print $row[0] . "\n";
}
?>
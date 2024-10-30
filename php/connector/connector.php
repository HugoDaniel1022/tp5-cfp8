<?php
class Connector{

    public function getConnection(){
        $driver='sqlite';
        $file='../../data/tienda.db';
        return new PDO("$driver:$file");
    }
}

?>
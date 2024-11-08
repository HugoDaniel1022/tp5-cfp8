<?php
class Connector{

    public function getConnection(){
        $driver='sqlite';
        $file='data/tienda.db';
        //$file=__DIR__.'/data/tienda.db';
        return new PDO("$driver:$file");
    }

    public function getConnectionTest(){
        $driver='sqlite';
        $file='../../data/tienda.db';
        //$file=__DIR__.'/data/tienda.db';
        return new PDO("$driver:$file");
    }

}

?>
<?php

use database as GlobalDatabase;

abstract class database{
public $connection;
public $connectionActive = false;
abstract function setConnection($dbName);
abstract function getConnection();
}

class DbConnection extends database{

    function setConnection($dbName)
    {
        $this->connectionActive = true;
        $this->connection =  "Connection handler to database". PHP_EOL;
    }

    function getConnection()
    {
        if($this->connectionActive){
            return $this->connection;
        }
    }
}
$db1 = new DbConnection();
$db1->setConnection('Test');
echo $db1->getConnection();

?>
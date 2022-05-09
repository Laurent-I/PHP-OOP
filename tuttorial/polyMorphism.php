<?php
interface Database{

function openConnection();

}

class OracleDatabase implements Database{
    function openConnection(){
        echo "Using the Oracle Driver to establish the Connection";
    }
}

class MySQLDatabase implements Database{
    function openConnection(){
        echo "Using the MySQL Driver to establish the Connection";
    }
} 



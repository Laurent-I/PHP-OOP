<?php

//echo "<pre>";
//var_dump($_POST);
//echo  "</pre>";

$connection = require_once  './Connection.php';
$id = $_POST['id'] ?? '';
if ($id){
    $connection->updateNote($id, $_POST);
}else {
    $connection->addNote($_POST);
}

header('location: index.php');


<?php
    $userName = "root";
    $serverName = "localhost";
    $password = "root";
    $dbName = "ti";

    $con = new mysqli($serverName, $userName, $password, $dbName);
    try{
        echo "Conectou";
    }catch(Exception $e){
        echo "Deu pau!";
    }
?>